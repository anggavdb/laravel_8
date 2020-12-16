@extends('layouts.app')
@section('content')
<div class="body m-10">
     <div class="from-group">
      {!! Form::label('judul', 'Judul'); !!}
      {!! Form::label('judul', $berita->judul,['class' => 'from-control']); !!}
     </div>
     <div class="from-group">
      {!! Form::label('isi', 'Isi'); !!}
      {!! Form::label('isi', $berita->isi,['class' => 'from-control']); !!}
     </div>
     <div class="from-group">
      {!! Form::label('created_at', 'Waktu Tambah'); !!}
      {!! Form::label('created_at', $berita->created_at->format('d/m/Y H:i:s '),['class' => 'from-control']); !!}
     </div>
     <div class="from-group">
      {!! Form::label('updated_at', 'Waktu Ubah'); !!}
      {!! Form::label('updated_at', $berita->updated_at->format('d/m/Y H:i:s '),['class' => 'from-control']); !!}
     </div>

     <a href="{!! route('berita.index') !!}" class="btn btn-warning">kembali</a>
    </div>
    </div>
</div>

    {!! Form::close() !!}

    </div>
</div>

        </div>
    </div>
</div>




    
@endsection