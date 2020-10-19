<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nama') }}
            {{ Form::text('nama', $anggota->nama, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'Nama']) }}
            {!! $errors->first('nama', '<div class="invalid-feedback">:message</p>') !!}</div>
            <div class="form-group">
                {{ Form::label('alamat') }}
                {{ Form::text('alamat', $anggota->alamat, ['class' => 'form-control' . ($errors->has('alamat') ? ' is-invalid' : ''), 'placeholder' => 'Alamat']) }}
                {!! $errors->first('alamat', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tempat_lahir') }}
                    {{ Form::text('tempat_lahir', $anggota->tempat_lahir, ['class' => 'form-control' . ($errors->has('tempat_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
                    {!! $errors->first('tempat_lahir', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('tanggal_lahir') }}
                        {{ Form::date('tanggal_lahir', $anggota->tanggal_lahir, ['class' => 'form-control' . ($errors->has('tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
                        {!! $errors->first('tanggal_lahir', '<div class="invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('jenis_kelamin') }}
                            {!! Form::radio('jenis_kelamin','L', $anggota->jenis_kelamin=="L" ? true : false) !!}
                            Laki-laki
                            {!! Form::radio('jenis_kelamin','P', $anggota->jenis_kelamin=="P" ? true : false) !!}
                            Perempuan
                            {!! $errors->first('jenis_kelamin', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Satus') }}
                                {!! Form::radio('status','0',$anggota->status=='0' ? true : false) !!} Tidak aktif
                                {!! Form::radio('status','1',$anggota->status=='1' ? true : false) !!} Aktif
                                {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('telepon') }}
                                    {{ Form::text('telepon', $anggota->telepon, ['class' => 'form-control' . ($errors->has('telepon') ? ' is-invalid' : ''), 'placeholder' => 'Telepon']) }}
                                    {!! $errors->first('telepon', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('keterangan') }}
                                        {{ Form::text('keterangan', $anggota->keterangan, ['class' => 'form-control' . ($errors->has('keterangan') ? ' is-nvalid' : ''), 'placeholder' => 'Keterangan']) }}
                                        {!! $errors->first('keterangan', '<div class="invalid-feedback">:message</p>')
                                            !!}
                                        </div>
                                    </div>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>