<?php

class DataTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('data')->delete();

        $path = storage_path() . DIRECTORY_SEPARATOR . 'pdfs' . DIRECTORY_SEPARATOR;

        $fullpath = $path . 'resume_1.pdf';
        $d = new Data;
        $d->firstname = 'Gago';
        $d->lastname = 'Arsenyan';
        $d->keywords = 'php, mysql, ruby';
        $d->pdffile = File::name($fullpath) . '.pdf';
        $d->type = File::extension($fullpath);
        $d->file = base64_encode(File::get($fullpath));
        $d->mime = 'application/pdf';
        $d->save();

        $fullpath = $path . 'resume_2.pdf';
        $d = new Data;
        $d->firstname = 'Nathan';
        $d->lastname = 'Serakuz';
        $d->keywords = 'php, laravel';
        $d->pdffile = File::name($fullpath) . '.pdf';
        $d->type = File::extension($fullpath);
        $d->file = base64_encode(File::get($fullpath));
        $d->mime = 'application/pdf';
        $d->save();

        $fullpath = $path . 'resume_3.pdf';
        $d = new Data;
        $d->firstname = 'Robin';
        $d->lastname = 'Erikson';
        $d->keywords = 'python, django';
        $d->pdffile = File::name($fullpath) . '.pdf';
        $d->type = File::extension($fullpath);
        $d->file = base64_encode(File::get($fullpath));
        $d->mime = 'application/pdf';
        $d->save();

        $fullpath = $path . 'resume_4.pdf';
        $d = new Data;
        $d->firstname = 'Angelina';
        $d->lastname = 'Gustafson';
        $d->keywords = 'ruby, RubyOnRails';
        $d->pdffile = File::name($fullpath) . '.pdf';
        $d->type = File::extension($fullpath);
        $d->file = base64_encode(File::get($fullpath));
        $d->mime = 'application/pdf';
        $d->save();
    }

}
