<?php

declare(strict_types=1);

namespace App\Cmf\Project\Category;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

trait CategoryCustomTrait
{
    public function actionSaveAmenities(Request $request, int $id)
    {
        /** @var Category $oItem */
        $oItem = $this->findByClass($this->class, $id);
        $array = $request->get('amenities') ?? [];
        $array = array_keys($array);
        $oItem->amenities()->sync($array);
        return responseCommon()->success([], 'Success');
    }
}
