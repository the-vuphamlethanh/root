using System.Globalization;

namespace Ex1;

public class Customer
{
    private readonly string _cusId;
    private string _cusName;
    private string _cusPhone;
    private string _cusGetIn;
    private string _cusGetOut;

    public Customer(string cusName, string cusPhone, string cusGetIn, string cusGetOut)
    {
        _cusId = DateTime.Now.ToString(CultureInfo.CurrentCulture);
        _cusName = cusName;
        _cusPhone = cusPhone;
        _cusGetIn = cusGetIn;
        _cusGetOut = cusGetOut;
    }

    public string GetCusId()
    {
        return _cusId;
    }

    public string CusName
    {
        get => _cusName;
        set => _cusName = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string CusPhone
    {
        get => _cusPhone;
        set => _cusPhone = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string CusGetIn
    {
        get => _cusGetIn;
        set => _cusGetIn = value ?? throw new ArgumentNullException(nameof(value));
    }

    public string CusGetOut
    {
        get => _cusGetOut;
        set => _cusGetOut = value ?? throw new ArgumentNullException(nameof(value));
    }
}