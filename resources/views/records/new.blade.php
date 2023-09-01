<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
        <h1>Let's Training</h1>
        <h1>Record</h1>
        <form action='/records/create' method='POST'>
            @csrf
            <div class='kind'>
                <h2>種類</h2>
                <input type='text' name='training[training_name]' placeholder='種目'>
            </div>
            <input type='submit' value='新規追加'/>
        </form>
        <div class='footer'>
            <a href='/records'>戻る</a>
        </div>
    </x-app-layout>
</html>
