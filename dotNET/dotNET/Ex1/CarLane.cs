namespace Ex1;

public class CarLane
{
    private readonly string _carLaneId;
    private Car _car;
    private string _carLaneHead;
    private string _carLaneTail;
    private string _driver;

    public CarLane(Car car, string carLaneHead, string carLaneTail)
    {
        _carLaneId = _car?.GetCarId() + "|" + carLaneHead + "|" + carLaneTail;
        _car = car;
        _carLaneHead = carLaneHead;
        _carLaneTail = carLaneTail;
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
}