<?php
class Home extends Controller
{
    private $setting;
    private $menu;
    private $slider;
    private $product;


    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->product = $this->model("ProductModel");
    }
    public function index()
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $productNews = $this->product->getProsNew();
        $productFeatureds = $this->product->getProsfeatured();
        return $this->view('client', [
            'page' => 'index',
            'css' => [
                'home',
            ],
            'js' => [
                'main',
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "productNews" => $productNews,
            "productFeatureds" => $productFeatureds,
        ]);
    }
}
