@csrf
<div class="form-group">

    @php $input = 'name'; @endphp
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control @error($input)
                            is-invalid
    @enderror" value="{{ isset($row) ? $row->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>



<div class="form-group">

    @php $input = 'email'; @endphp
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control @error($input)
                            is-invalid
    @enderror" value="{{ isset($row) ? $row->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="form-group">

    @php $input = 'message'; @endphp
    <label for="exampleInputPassword1">Message</label>
    <textarea name="{{ $input }}" cols="30" rows="10"
        class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
