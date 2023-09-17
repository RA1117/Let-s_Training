<x-app-layout>
    <x-slot name="header">
        　Record
    </x-slot>
    <h1 class='training'>Let's Training</h1>
    <h1 class='record'>Record</h1>
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
