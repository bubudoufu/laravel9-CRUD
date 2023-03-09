@extends('members.layout')

@section('content')
<h2 class="subtitle has-text-centered mt-4">メンバー初期表示</h2>


<div class="column is-8 is-offset-2">
	<a class="button is-primary my-4 is-fullwidth" href="{{ route('members.create') }}"> 新規作成</a>




	<table class="table is-bordered is-striped has-text-centered is-fullwidth">
		<tr>
			<th>ID</th>
			<th>名前</th>
			<th>住所</th>
			<th>電話番号</th>
			{{-- <th>Details</th> --}}
			<th>操作</th>
		</tr>
		@foreach ($members as $member)
		<tr>
			{{-- <td>{{ ++$i }}</td> --}}
			<td>{{ $member->id }}</td>
			<td>{{ $member->name }}</td>
			<td>{{ $member->address }}</td>
			<td>{{ $member->phone }}</td>
			{{-- <td>{{ $member->detail }}</td> --}}
			<td>
				<form action="{{ route('members.destroy',$member->id) }}" method="POST">
					<a class="button is-info" href="{{ route('members.show',$member->id) }}">詳細を表示</a>
					<a class="button is-success" href="{{ route('members.edit',$member->id) }}">編集</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="button is-danger">削除</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
