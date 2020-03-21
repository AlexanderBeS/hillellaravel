<form action="{{route('process_operation')}}" method="post">

    @csrf
    <input type="text" name="number1" />
    <input type="text" name="number2" />
    <select name="operation">
        <option value="sum">+</option>
        <option value="mul">*</option>
        <option value="sub">-</option>
        <option value="div">/</option>
    </select>
<input type="submit" value="calc" />
</form>


<h1>Result: {{ $result }}</h1>