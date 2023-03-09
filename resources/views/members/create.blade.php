@extends('members.layout')

@section('content')
<h2 class="subtitle has-text-centered mt-4">新規作成</h2>

@if ($errors->any())
<article class="message is-danger">
	<div class="message-header">
		<p>エラー！！
			入力内容に問題がありました。</p>
	</div>
	<div class="message-body">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</article>
@endif
<div class="column is-8 is-offset-2">
	<form action="{{ route('members.store') }}" method="POST">
		@csrf
		<h3 class="has-text-weight-bold">名前:</h3>
		<input class="input" type="text" name="name" placeholder="名前">
		<h3 class="has-text-weight-bold">住所:</h3>
		<input class="input" name="address" placeholder="住所"></input>
		<h3 class="has-text-weight-bold">電話番号:</h3>
		<input class="input" name="phone" placeholder="電話番号"></input>
		<h3 class="has-text-weight-bold">順番:</h3>
		<input class="input" name="no" placeholder="順番"></input>
		<div class="columns">
			<div class="column">
				<button type="submit" class="button is-success my-4">送信</button>
			</div>
			<div class="has-text-right column">
				<a class="button is-info my-4" href="{{ route('members.index') }}"> 戻る</a>
			</div>
		</div>
	</form>
</div>
@endsection