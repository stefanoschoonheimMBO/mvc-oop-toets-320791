<?php

class poundForPound extends BaseController
{
    private $poundForPound;
    public function __construct()
    {
        $this->poundForPound = $this->model('poundForPound');
    }

    public function index()
    {
        $result = $this->poundForPound->getMensPounds();

        $rows = "";

        foreach($result as $mensPound) {
            $rows .= "<tr>
                        <td>$mensPound->Naam</td>
                        <td>$mensPound->Club</td>
                        <td>$mensPound->Leeftijd</td>
                        <td>$mensPound->Nationaliteit</td>
                        <td>$mensPound->Salaris</td>
                      <tr>";
        }

        $data = [
            'title' => 'Mens pound-for-pound top rank ufc',
            'rows' => $rows
        ];

        $this->view('PoundForPound/index', $data);
    }
}