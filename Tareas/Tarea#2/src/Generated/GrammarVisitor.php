<?php

/*
 * Generated from grammar/Grammar.g4 by ANTLR 4.13.2
 */

namespace App\Generated;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GrammarParser}.
 */
interface GrammarVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GrammarParser::root()}.
	 *
	 * @param Context\RootContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRoot(Context\RootContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::instrucciones()}.
	 *
	 * @param Context\InstruccionesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInstrucciones(Context\InstruccionesContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::instruccion()}.
	 *
	 * @param Context\InstruccionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInstruccion(Context\InstruccionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::asignacion()}.
	 *
	 * @param Context\AsignacionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacion(Context\AsignacionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::print_stmt()}.
	 *
	 * @param Context\Print_stmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrint_stmt(Context\Print_stmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::if_stmt()}.
	 *
	 * @param Context\If_stmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIf_stmt(Context\If_stmtContext $context);

	/**
	 * Visit a parse tree produced by the `agrupacion` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\AgrupacionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAgrupacion(Context\AgrupacionContext $context);

	/**
	 * Visit a parse tree produced by the `opAritmetica` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\OpAritmeticaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpAritmetica(Context\OpAritmeticaContext $context);

	/**
	 * Visit a parse tree produced by the `atomo` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\AtomoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAtomo(Context\AtomoContext $context);

	/**
	 * Visit a parse tree produced by the `opUnaria` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\OpUnariaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpUnaria(Context\OpUnariaContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::cond()}.
	 *
	 * @param Context\CondContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCond(Context\CondContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::opRel()}.
	 *
	 * @param Context\OpRelContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpRel(Context\OpRelContext $context);
}