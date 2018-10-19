namespace App;

class App {

    private bigArray = [];

	public function __construct()
	{
	    let this->bigArray = this->fillArray();
	    this->printArray();
	}

    protected function fillArray()
    {
        var bigArray;
        let bigArray = array_fill(0, 100000, str_shuffle("abcdef"));
        return bigArray;
    }

     public function printArray() {
        var item;
        for item in this->bigArray {
          echo item, "\n";
        }
     }
}