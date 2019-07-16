<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Lexer;

/**
 * An interface that is an abstract implementation of a lexer.
 *
 * An implementation should be a lexical analyser, i.e. split a string into
 * a set of lexeme (tokens).
 */
interface LexerInterface
{
    /**
     * Compiles the current state (if required) and returns a set
     * of tokens from the passed source.
     *
     * @param mixed $source Source for analysis. May be of arbitrary type,
     *                      including SplFileInfo object or text.
     *
     * @return iterable|TokenInterface[] Returns a set of tokens.
     *
     * @throws LexerExceptionInterface If an error happens while processing
     *                                 the source text.
     */
    public function lex($source): iterable;
}
