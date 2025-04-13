<?php
class HomeController extends Controller
{
  private $sampleModel;

  public function __construct()
  {
    $this->sampleModel = $this->model('SampleModel');
  }

  public function index()
  {
    $items = $this->sampleModel->getAllItems();

    $data = [
      'title' => 'Bienvenido a ' . SITENAME,
      'items' => $items
    ];

    $this->view('home/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'Acerca de nosotros'
    ];

    $this->view('home/about', $data);
  }

  public function item($id = null)
  {
    if ($id) {
      $item = $this->sampleModel->getItemById($id);

      if ($item) {
        $data = [
          'title' => $item['title'],
          'item' => $item
        ];

        $this->view('home/item', $data);
      } else {
        header('Location: ' . URLROOT);
      }
    } else {
      header('Location: ' . URLROOT);
    }
  }

  public function search()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $query = isset($_POST['query']) ? trim($_POST['query']) : '';
      $results = $this->sampleModel->searchItems($query);

      $data = [
        'title' => 'Resultados de búsqueda',
        'query' => $query,
        'results' => $results
      ];

      $this->view('home/search', $data);
    } else {
      header('Location: ' . URLROOT);
    }
  }
}
