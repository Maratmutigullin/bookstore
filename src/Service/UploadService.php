<?php

namespace App\Service;

use App\Exception\UploadFileInvalidException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Uid\Uuid;

class UploadService
{
    private const LINK_BOOK_PATTERN = 'upload/book/%d/%s';

    public function __construct(private FileSystem $fs, private string $uploadDir)
    {
    }

    public function uploadBookFile(int $bookId, UploadedFile $file): string
    {
        //проверяет mime файла
        $extension = $file->guessExtension();
        if (null === $extension) {
            throw new UploadFileInvalidException();
        }
        //переименовываем файл
        $uniqueName = Uuid::v4()->toRfc4122() . '.' . $extension;
        //папка
        $uploadPath = $this->getUloadPathForBook($bookId);
        //перемещаем файл
        $file->move($uploadPath, $uniqueName);

        return sprintf(self::LINK_BOOK_PATTERN, $bookId, $uniqueName);
    }

    public function deleteBookFile(int $id, string $fileName): void
    {
        $this->fs->remove($this->uploadDir . DIRECTORY_SEPARATOR . 'book' . DIRECTORY_SEPARATOR . $fileName);
    }

    public function getUloadPathForBook(int $id): string
    {
        return $this->uploadDir . DIRECTORY_SEPARATOR . 'book' . DIRECTORY_SEPARATOR . $id;
    }
}