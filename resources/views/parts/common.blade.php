<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @isset($title)
        <title>{{ $title }} - 株式会社 日本自動車</title>
    @else
        <title>株式会社 日本自動車</title>
    @endisset    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>