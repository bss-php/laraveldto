<?php

namespace bssphp\laraveldto\Tests;

use Illuminate\Http\Request;
use bssphp\laraveldto\AbstractModelData;
use bssphp\laraveldto\Attributes\ForModel;
use bssphp\laraveldto\Attributes\ModelAttribute;
use bssphp\laraveldto\Attributes\RequestAttribute;
use bssphp\laraveldto\Attributes\ValidatedRequestModelAttribute;
use bssphp\laraveldto\Attributes\ValidationRule;
use bssphp\laraveldto\Tests\Model\SampleModel;

class CombinedAttributesTest extends TestCase
{
    public function testCombined()
    {
        $data = CombinedRequestSampleData::fromRequest(
            Request::create('/', 'POST', ['some_name' => 'Foo'])
        );

        $model = $data->toModel();

        self::assertInstanceOf(SampleModel::class, $model);
        self::assertSame('Foo', $model->other_name);
    }

    public function testCombinedWithCombinedAttribute()
    {
        $data = CombinedSampleDataWithCombinedAttribute::fromRequest(
            Request::create('/', 'POST', ['some_name' => 'Foo'])
        );

        $model = $data->toModel();

        self::assertInstanceOf(SampleModel::class, $model);
        self::assertSame('Foo', $model->other_name);
    }
}

#[ForModel(SampleModel::class)]
class CombinedRequestSampleData extends AbstractModelData
{
    #[RequestAttribute('some_name'), ModelAttribute('other_name'), ValidationRule(['required', 'string'])]
    public string $name;
}

#[ForModel(SampleModel::class)]
class CombinedSampleDataWithCombinedAttribute extends AbstractModelData
{
    #[ValidatedRequestModelAttribute(['required', 'string'], 'some_name', 'other_name')]
    public string $name;
}
