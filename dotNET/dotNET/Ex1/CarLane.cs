namespace Ex1;

public class CarLane
{
    private readonly string _carLaneId;
    private Car _car;
    private string _carLaneHead;
    private string _carLaneTail;
    private string _driver;

    public CarLane(Car car, string carLaneHead, string carLaneTail, string driver)
    {
        _carLaneId = _car?.GetCarId() + "|" + carLaneHead + "|" + carLaneTail;
        _car = car;
        _carLaneHead = carLaneHead;
        _carLaneTail = carLaneTail;
        _driver = driver;
    }

    public string GetCarLaneId()
    {
        return _carLaneId;
    }
    
    public Car Car
    {
        get => _car;
        set => _car = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string CarLaneHead
    {
        get => _carLaneHead;
        set => _carLaneHead = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string CarLaneTail
    {
        get => _carLaneTail;
        set => _carLaneTail = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string Driver
    {
        get => _driver;
        set => _driver = value ?? throw new ArgumentNullException(nameof(value));
    }
}