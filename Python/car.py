from lib2to3.pgen2 import driver


class Car:
    id = int
    license = str
    driver = str
    passenger = int 
    
    def __init__(self, license, driver):
        self.license = license
        self.driver = driver