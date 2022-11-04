
@include('message.list')
{!! Form::model($catalogs, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CreateCatalogsControllers@update', $catalogs->id]]) !!}
@include('catalogs.form', ['submitButtonText'=>'更新資料'])
{!! Form::close() !!}
