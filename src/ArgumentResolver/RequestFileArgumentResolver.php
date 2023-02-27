<?php

namespace App\ArgumentResolver;

use App\Attribute\RequestBody;
use App\Attribute\RequestFile;
use App\Exception\RequestBodyConvertException;
use App\Exception\ValidationException;
use Generator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Throwable;

class RequestFileArgumentResolver implements ArgumentValueResolverInterface
{
    public function __construct(private ValidatorInterface $validator)
    {
    }

    //если метод suppors возвращает true то срабатывает метод resolve
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return count($argument->getAttributes(RequestFile::class, ArgumentMetadata::IS_INSTANCEOF)) > 0;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): ?Generator
    {
        /** @var RequestFile $attribute */
        $attribute = $argument->getAttributes(RequestFile::class, ArgumentMetadata::IS_INSTANCEOF)[0];

        //получаем файл по ключу
        /** @var UploadedFile $uploadedFile */
        $uploadedFile = $request->files->get($attribute->getField());

        //валидируем
        $errors = $this->validator->validate($uploadedFile, $attribute->getConstraints());
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }

        // Вся суть генератора заключается в ключевом слове yield.
        // В самом простом варианте оператор "yield" можно рассматривать как оператор "return",
        // за исключением того, что вместо прекращения работы функции, "yield" только приостанавливает
        // её выполнение и возвращает текущее значение,
        // и при следующем вызове функции она возобновит выполнение с места, на котором прервалась
        yield $uploadedFile;
    }
}