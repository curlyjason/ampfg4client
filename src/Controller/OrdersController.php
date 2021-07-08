<?php


namespace App\Controller;


use App\Constants\OrderCon;
use Cake\Datasource\RepositoryInterface;
use Cake\Http\Client;
use Cake\Http\Response;

class OrdersController extends AppController
{
    /**
     * @var RepositoryInterface|Client|null
     */
    private $RobotClient;

    public function initialize(): void
    {
        parent::initialize();
        $this->RobotClient = new Client([
            'host' => OrderCon::HOST,
            'scheme' => 'http',
            'redirect' => 1
        ]);

    }

    public function place()
    {
//        debug(OrderCon::ADDORDER1);
//        debug(OrderCon::addOrder2());die;
        $id = $id ?? 9857;
        /**
         * @var Response $response
         */
        $response = $this->RobotClient->post(
            "robot-orders/add?token=" . OrderCon::TOKENXTRA,
            OrderCon::addOrder2()
//            OrderCon::ADDORDER1
        );
        debug($response);
        debug($response->getBody()->getContents());die;
//        $response = $this->RobotClient->get(
//            "robot-orders/$id.json");
//        $response = $this->RobotClient->get("robots/$id.json", ['token' => 'ac62001e66caaa8614610284b07d50c1a7f487b1']);
        pr (json_decode($response->getBody()->getContents()));
        pr($response->getJson());
        die;
//        return new InventoryAPIResponse($this->Client->patch(
//            "inventories/{$data['inventory_id']}.$this->encoding?token=$this->token",
//            $data
//        ), $this->encoding);

    }
}
