class Main {
    public static void main(String[] args) {
        System.out.println("Hol amundo");
        UberX uberX = new UberX("AMR34", new Account ("Antauro", "AND34"), "Chevrolet", "sonid");
        uberX.setpassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("SGE34", new Account("Antauros", "AWDA34"));
        uberVan.setpassenger(6);
        uberVan.printDataCar();

        // Car car2 = new Car("ARG34", new Account("Andres","ANDA37"));
        // car2.passenger = 3;
        // car2.printDataCar();
    }
}