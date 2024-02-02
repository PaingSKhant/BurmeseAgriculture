<?php 


class Agriculture
{
    public function connect()
    {
        $json_file = "./json/BurmeseAgriculture.json";

        $json_data = file_get_contents($json_file);

        $agri  = json_decode($json_data, true);

        return $agri;
    }

    public function paginate()
    {
        $recipes = $this->connect();
        $cardsPerPage = 6;

        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        $startIndex = ($page - 1) * $cardsPerPage;

        $currentPageData = array_slice($recipes, $startIndex, $cardsPerPage);

        return $currentPageData;
    }

    public function link()
    {
        $recipes = $this->connect();
        $cardsPerPage = 6;

        $totalItems = count($recipes);
        $totalPages = ceil($totalItems / $cardsPerPage);

        return $totalPages ;
    }
}

$BurmeseAgriculture = new Agriculture();