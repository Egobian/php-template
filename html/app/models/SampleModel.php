<?php
class SampleModel
{
  private $sampleData = [];

  public function __construct()
  {
    $this->sampleData = [
      [
        'id' => 1,
        'title' => 'Primer elemento',
        'description' => 'Descripción del primer elemento de ejemplo.',
        'created_at' => '2025-06-13'
      ],
      [
        'id' => 2,
        'title' => 'Segundo elemento',
        'description' => 'Descripción del segundo elemento de ejemplo.',
        'created_at' => '2025-06-13'
      ],
      [
        'id' => 3,
        'title' => 'Tercer elemento',
        'description' => 'Descripción del tercer elemento de ejemplo.',
        'created_at' => '2025-06-13'
      ]
    ];
  }

  public function getAllItems()
  {
    return $this->sampleData;
  }

  public function getItemById($id)
  {
    foreach ($this->sampleData as $item) {
      if ($item['id'] == $id) {
        return $item;
      }
    }
    return null;
  }

  public function addItem($data)
  {
    $newId = count($this->sampleData) + 1;

    $newItem = [
      'id' => $newId,
      'title' => $data['title'],
      'description' => $data['description'],
      'created_at' => date('Y-m-d')
    ];

    $this->sampleData[] = $newItem;

    return true;
  }

  public function updateItem($id, $data)
  {
    foreach ($this->sampleData as $key => $item) {
      if ($item['id'] == $id) {
        $this->sampleData[$key]['title'] = $data['title'];
        $this->sampleData[$key]['description'] = $data['description'];
        return true;
      }
    }
    return false;
  }

  public function deleteItem($id)
  {
    foreach ($this->sampleData as $key => $item) {
      if ($item['id'] == $id) {
        unset($this->sampleData[$key]);
        $this->sampleData = array_values($this->sampleData);
        return true;
      }
    }
    return false;
  }

  public function searchItems($query)
  {
    $result = [];

    foreach ($this->sampleData as $item) {
      if (
        stripos($item['title'], $query) !== false ||
        stripos($item['description'], $query) !== false
      ) {
        $result[] = $item;
      }
    }

    return $result;
  }
}
