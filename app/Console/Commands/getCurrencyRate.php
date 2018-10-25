<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

use App\Swap;
use App\Currency;
use App\Exchange;

class getCurrencyRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getCurrenciesRate:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get currency exchange rate for all combinations posible.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $currencies = Currency::all();

        foreach($currencies as $currency){
            if($currency->iso == "EUR"){
                $rate= \Swap::latest('EUR/USD');
                $exchange = new Exchange();
                $exchange->from = "EUR";
                $exchange->to = "USD";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('EUR/USD -> '.$rate->getValue());

                $rate= \Swap::latest('EUR/TRY');
                $exchange = new Exchange();
                $exchange->from = "EUR";
                $exchange->to = "TRY";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('EUR/TRY  -> '.$rate->getValue());

                $rate= \Swap::latest('EUR/GBP');
                $exchange = new Exchange();
                $exchange->from = "EUR";
                $exchange->to = "GBP";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('EUR/GBP -> '.$rate->getValue());
            }
            if($currency->iso == "USD"){
                $rate= \Swap::latest('USD/GBP');
                $exchange = new Exchange();
                $exchange->from = "USD";
                $exchange->to = "GBP";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('USD/GBP -> '.$rate->getValue());

                $rate= \Swap::latest('USD/EUR');
                $exchange = new Exchange();
                $exchange->from = "USD";
                $exchange->to = "EUR";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('USD/EUR  -> '.$rate->getValue());

                $rate= \Swap::latest('USD/TRY');
                $exchange = new Exchange();
                $exchange->from = "USD";
                $exchange->to = "TRY";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('USD/TRY -> '.$rate->getValue());
            }
            
            if($currency->iso == "TRY"){
                $rate= \Swap::latest('TRY/USD');
                $exchange = new Exchange();
                $exchange->from = "TRY";
                $exchange->to = "USD";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('TRY/USD -> '.$rate->getValue());

                $rate= \Swap::latest('TRY/EUR');
                $exchange = new Exchange();
                $exchange->from = "TRY";
                $exchange->to = "EUR";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('TRY/EUR  -> '.$rate->getValue());

                $rate= \Swap::latest('TRY/GBP');
                $exchange = new Exchange();
                $exchange->from = "TRY";
                $exchange->to = "GBP";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('TRY/GBP -> '.$rate->getValue());
            }
            if($currency->iso == "GBP"){
                $rate= \Swap::latest('GBP/USD');
                $exchange = new Exchange();
                $exchange->from = "GBP";
                $exchange->to = "USD";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('GBP/USD -> '.$rate->getValue());

                $rate= \Swap::latest('GBP/EUR');
                $exchange = new Exchange();
                $exchange->from = "GBP";
                $exchange->to = "EUR";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('GBP/EUR  -> '.$rate->getValue());

                $rate= \Swap::latest('GBP/TRY');
                $exchange = new Exchange();
                $exchange->from = "GBP";
                $exchange->to = "TRY";
                $exchange->rate =$rate->getValue();
                $exchange->save();
                $this->info('GBP/TRY -> '.$rate->getValue());
            }
        }
        
    }
}
