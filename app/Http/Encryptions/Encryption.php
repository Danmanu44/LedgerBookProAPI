 class Encryption{

    public function GenerateUniqueId($name){
        $date = date('Y-m-d H:i:s');
       $intDate= int idate($date);
        dd($date." int convert: ".$intDate);

    }
}