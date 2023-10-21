class MyClass
{
    public $firstname;
    public $familyname;

    public function __construct($firstname = null, $familyname = null)
    {
        $this->firstname = $firstname;
        $this->familyname = $familyname;
    }

    public function great()
    {
        return "Hello, " . $this->firstname . " " . $this->family;
    }
}

$me = new MyClass("Kosta", "Kazakov");
echo $me->great();
