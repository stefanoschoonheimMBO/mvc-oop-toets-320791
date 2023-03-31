<?php

class poundForPound extends BaseController
{
    private $poundForPound;
    public function __construct()
    {
        $this->poundForPound = $this->model('PoundModel');
    }

    public function index()
    {
        $result = $this->poundForPound->getMensPounds();

        $rows = "";

        foreach($result as $mensPound) {
            $rows .= "<tr>
                        <td>$mensPound->Name</td>
                        <td>$mensPound->Ranking</td>
                        <td>$mensPound->Length</td>
                        <td>$mensPound->Weight</td>
                        <td>$mensPound->Age</td>
                        <td>$mensPound->WinsByKnockout</td>
                      <tr>";
        }

        $data = [
            'title' => 'Mens pound-for-pound top rank ufc',
            'rows' => $rows
        ];

        $this->view('PoundForPound/index', $data);
    }
}