from car import Car
from account import Account

if __name__ == "__main__":
    print("hola mundo") 
    car = Car("AMD234", Account("Antauro", "AWD23"))
    car.passenger = 6;
    print(vars(car))
    print(vars(car.driver))
    
