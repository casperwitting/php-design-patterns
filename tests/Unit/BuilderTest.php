<?php


namespace Unit;


use App\Patterns\Builder\JsonResponse;
use App\Patterns\Builder\JsonResponseBuilder;
use App\Patterns\Builder\JsonResponseBuilderDirector;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuilder()
    {
        $builder = new JsonResponseBuilder();
        $builder->setData([
            [
                'name' => 'Ben John',
                'age' => 25,
                'email' => 'noreply@gmail.com',
            ],
            [
                'name' => 'Shara John',
                'age' => 23,
                'email' => 'noreply@gmail.com',
            ]
        ]);

        $builderDirector = new JsonResponseBuilderDirector($builder);
        $builderDirector->BuildResponse();

        /** @var JsonResponse $response */
        $response = $builderDirector->getResponse();

        $this->assertEquals([
            'data' => [
                [
                    'name' => 'Ben John',
                    'age' => 25,
                    'email' => 'noreply@gmail.com',
                ],
                [
                    'name' => 'Shara John',
                    'age' => 23,
                    'email' => 'noreply@gmail.com',
                ]
            ],
            'meta' => [
                'perPage' => 20,
                'total' => 2
            ]
        ], $response->getJson());

    }
}