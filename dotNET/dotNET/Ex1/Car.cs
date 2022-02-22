namespace Ex1;

public class Car
{
    private readonly string _carId;
    private string _carType;
    private int _carAmount;

    public Car(string carId, string carType, int carAmount)
    {
        _carId = carId;
        _carType = carType;
        _carAmount = carAmount;
    }

    public string GetCarId()
    {
        return _carId;
    }

    public string CarType { get; set; } = null!;

    public int CarAmount { get; set; } 
}