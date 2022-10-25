import java.util.ArrayList;

class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberVan(String license, Account driverl){
        super(license, driverl);
    }



    public UberVan(String license, Account driver, Map<String, Map<String,Integer>> typeCarAccepted, ArrayList<String> seatsMaterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }

    @Override
    public void setpassenger(Integer passenger) {
        if (passenger == 6){
            this.passenger = passenger; 
        }else {
            System.out.println("Asigna 6 passeengers");
        } 
    }


    
    
}