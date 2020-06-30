<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>
        Buat Akun Baru
    </h1>

    <h2>
        Sign Up Form
    </h2>

<form action="{{url('/proses-form')}}" method="POST">
    @csrf
        <label for="first_name">
            First Name:
        </label>

        <p>
            <input type="text" name="first_name">
        </p>

        <label for="last_name">
            Last Name:
        </label>

        <p>
            <input type="text" name="last_name" >
        </p>

        <label for="gender">
            Gender:
        </label>

        <p>
            <input type="radio" name="gender" value="Male"> Male
        </p>

        <p>
            <input type="radio" name="gender" value="Female"> Female
        </p>

        <p>
            <input type="radio" name="gender" value="Other"> Other
        </p>

        <label for >
            Nationality:
        </label>

        <p>
            <select name="nationality">

                <option value="Indonesian">
                    Indonesia
                </option>

                <option value="Singaporenan">
                    Singaporean
                </option>

                <option value="Malaysian">
                    Malaysian
                </option>

                <option value="Australian">
                    Australian
                </option>

            </select>
        </p>

        <label for="Nationality">
            Languange Spoken:
        </label>

        <p>
            <input type="checkbox" name="nationality_indo" value="Bahasa Indonesia"> Bahasa Indonesia
        </p>

        <p>
            <input type="checkbox" name="nationality_english" value="English"> English
        </p>

        <p>
            <input type="checkbox" name="nationality_other" value="Other"> other
        </p>

        <label for="bio">
            Bio:
        </label>

        <p>
            <textarea name="bio" cols="30" rows="10">

            </textarea>
        </p>

        <button type="submit">Sign Up</button>
    </form>



</body>
</html>
