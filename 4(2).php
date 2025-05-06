<?php
trait Cacheable {
    protected $cache = [];

    public function getCache($key) {
        return $this->cache[$key] ?? null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData($key) {
        return $this->getCache($key) ?? "Данные не найдены!";
    }
}

class ProductRepository {
    use Cacheable;

    public function cacheData($key, $data) {
        $this->setCache($key, $data);
    }
}

function testCaching() {
    $productRepo = new ProductRepository();
    $productRepo->cacheData('product_1', 'Продукт 1');
    $cachedData = $productRepo->getCache('product_1');
    if ($cachedData != 'Продукт 1') {
        die("Ошибка в ProductRepository!<br>");
    }

    $dataProvider = new DataProvider();
    $dataProvider->setCache('data_key', 'Кэшированные данные');
    $fetchedData = $dataProvider->fetchData('data_key');
    if ($fetchedData != 'Кэшированные данные') {
        die("Ошибка в DataProvider!<br>");
    }

    $missingData = $dataProvider->fetchData('unknown_key');
    if ($missingData != "Данные не найдены!") {
        die("Ошибка в DataProvider с отсутствующими данными!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testCaching();
?>
