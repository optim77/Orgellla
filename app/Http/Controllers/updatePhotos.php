<?php



    if($request->file('photo1') && $request->file('photo1')->getClientSize() < 500000){
        $name = uniqid(null,true);
        $guessExtension = $request->file('photo1')->guessExtension();
        $photo1 = $name.'.'.$guessExtension;
        $file = $request->file('photo1')->move('upload/photos', $name.'.'.$guessExtension);
    }


    if($request->file('photo2') && $request->file('photo2')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo2')->guessExtension();
        $photo2 = $name.'.'.$guessExtension;
        $file = $request->file('photo2')->move('upload/photos', $name.'.'.$guessExtension);
    }



    if($request->file('photo3') && $request->file('photo3')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo3')->guessExtension();
        $photo3 = $name.'.'.$guessExtension;
        $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
    }



    if($request->file('photo3') && $request->file('photo3')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo3')->guessExtension();
        $photo3 = $name.'.'.$guessExtension;
        $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
    }



    if($request->file('photo4') && $request->file('photo4')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo4')->guessExtension();
        $photo4 = $name.'.'.$guessExtension;
        $file = $request->file('photo4')->move('upload/photos', $name.'.'.$guessExtension);
    }


    if($request->file('photo5') && $request->file('photo5')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo5')->guessExtension();
        $photo5 = $name.'.'.$guessExtension;
        $file = $request->file('photo5')->move('upload/photos', $name.'.'.$guessExtension);
    }


    if($request->file('photo6') && $request->file('photo6')->getClientSize() < 500000){

        $name = uniqid(null,true);
        $guessExtension = $request->file('photo3')->guessExtension();
        $photo6 = $name.'.'.$guessExtension;
        $file = $request->file('photo6')->move('upload/photos', $name.'.'.$guessExtension);
    }


$product->update(['photo1' => isset($photo1) ? $photo1 : null]);
$product->update(['photo1' => isset($photo2) ? $photo2 : null]);
$product->update(['photo3' => isset($photo3) ? $photo3 : null]);
$product->update(['photo4' => isset($photo4) ? $photo4 : null]);
$product->update(['photo5' => isset($photo5) ? $photo5 : null]);
$product->update(['photo6' => isset($photo6) ? $photo6 : null]);

