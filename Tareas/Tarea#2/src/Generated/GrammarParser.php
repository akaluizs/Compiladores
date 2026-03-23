<?php

/*
 * Generated from grammar/Grammar.g4 by ANTLR 4.13.2
 */

namespace App\Generated {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GrammarParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, NUMBER = 21, ID = 22, 
               WS = 23;

		public const RULE_root = 0, RULE_instrucciones = 1, RULE_instruccion = 2, 
               RULE_asignacion = 3, RULE_print_stmt = 4, RULE_if_stmt = 5, 
               RULE_expr = 6, RULE_cond = 7, RULE_opRel = 8;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'root', 'instrucciones', 'instruccion', 'asignacion', 'print_stmt', 'if_stmt', 
			'expr', 'cond', 'opRel'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "';'", "'\$'", "':='", "'print'", "'('", "')'", "'if'", "'{'", 
		    "'}'", "'else'", "'-'", "'*'", "'/'", "'+'", "'>'", "'<'", "'>='", 
		    "'<='", "'=='", "'!='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, "NUMBER", 
		    "ID", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 23, 87, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 1, 0, 1, 0, 
		    1, 0, 1, 1, 4, 1, 23, 8, 1, 11, 1, 12, 1, 24, 1, 2, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 2, 1, 2, 3, 2, 34, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 
		    1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 56, 8, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 
		    6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 68, 8, 6, 1, 6, 1, 6, 1, 6, 
		    1, 6, 1, 6, 1, 6, 5, 6, 76, 8, 6, 10, 6, 12, 6, 79, 9, 6, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 0, 1, 12, 9, 0, 2, 4, 6, 8, 10, 12, 
		    14, 16, 0, 3, 1, 0, 12, 13, 2, 0, 11, 11, 14, 14, 1, 0, 15, 20, 86, 
		    0, 18, 1, 0, 0, 0, 2, 22, 1, 0, 0, 0, 4, 33, 1, 0, 0, 0, 6, 35, 1, 
		    0, 0, 0, 8, 40, 1, 0, 0, 0, 10, 45, 1, 0, 0, 0, 12, 67, 1, 0, 0, 0, 
		    14, 80, 1, 0, 0, 0, 16, 84, 1, 0, 0, 0, 18, 19, 3, 2, 1, 0, 19, 20, 
		    5, 0, 0, 1, 20, 1, 1, 0, 0, 0, 21, 23, 3, 4, 2, 0, 22, 21, 1, 0, 0, 
		    0, 23, 24, 1, 0, 0, 0, 24, 22, 1, 0, 0, 0, 24, 25, 1, 0, 0, 0, 25, 
		    3, 1, 0, 0, 0, 26, 27, 3, 6, 3, 0, 27, 28, 5, 1, 0, 0, 28, 34, 1, 
		    0, 0, 0, 29, 34, 3, 10, 5, 0, 30, 31, 3, 8, 4, 0, 31, 32, 5, 1, 0, 
		    0, 32, 34, 1, 0, 0, 0, 33, 26, 1, 0, 0, 0, 33, 29, 1, 0, 0, 0, 33, 
		    30, 1, 0, 0, 0, 34, 5, 1, 0, 0, 0, 35, 36, 5, 2, 0, 0, 36, 37, 5, 
		    22, 0, 0, 37, 38, 5, 3, 0, 0, 38, 39, 3, 12, 6, 0, 39, 7, 1, 0, 0, 
		    0, 40, 41, 5, 4, 0, 0, 41, 42, 5, 5, 0, 0, 42, 43, 5, 22, 0, 0, 43, 
		    44, 5, 6, 0, 0, 44, 9, 1, 0, 0, 0, 45, 46, 5, 7, 0, 0, 46, 47, 3, 
		    14, 7, 0, 47, 48, 5, 8, 0, 0, 48, 49, 3, 2, 1, 0, 49, 55, 5, 9, 0, 
		    0, 50, 51, 5, 10, 0, 0, 51, 52, 5, 8, 0, 0, 52, 53, 3, 2, 1, 0, 53, 
		    54, 5, 9, 0, 0, 54, 56, 1, 0, 0, 0, 55, 50, 1, 0, 0, 0, 55, 56, 1, 
		    0, 0, 0, 56, 11, 1, 0, 0, 0, 57, 58, 6, 6, -1, 0, 58, 59, 5, 11, 0, 
		    0, 59, 68, 3, 12, 6, 6, 60, 61, 5, 5, 0, 0, 61, 62, 3, 12, 6, 0, 62, 
		    63, 5, 6, 0, 0, 63, 68, 1, 0, 0, 0, 64, 68, 5, 21, 0, 0, 65, 66, 5, 
		    2, 0, 0, 66, 68, 5, 22, 0, 0, 67, 57, 1, 0, 0, 0, 67, 60, 1, 0, 0, 
		    0, 67, 64, 1, 0, 0, 0, 67, 65, 1, 0, 0, 0, 68, 77, 1, 0, 0, 0, 69, 
		    70, 10, 5, 0, 0, 70, 71, 7, 0, 0, 0, 71, 76, 3, 12, 6, 6, 72, 73, 
		    10, 4, 0, 0, 73, 74, 7, 1, 0, 0, 74, 76, 3, 12, 6, 5, 75, 69, 1, 0, 
		    0, 0, 75, 72, 1, 0, 0, 0, 76, 79, 1, 0, 0, 0, 77, 75, 1, 0, 0, 0, 
		    77, 78, 1, 0, 0, 0, 78, 13, 1, 0, 0, 0, 79, 77, 1, 0, 0, 0, 80, 81, 
		    3, 12, 6, 0, 81, 82, 3, 16, 8, 0, 82, 83, 3, 12, 6, 0, 83, 15, 1, 
		    0, 0, 0, 84, 85, 7, 2, 0, 0, 85, 17, 1, 0, 0, 0, 6, 24, 33, 55, 67, 
		    75, 77];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Grammar.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function root(): Context\RootContext
		{
		    $localContext = new Context\RootContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_root);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(18);
		        $this->instrucciones();
		        $this->setState(19);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function instrucciones(): Context\InstruccionesContext
		{
		    $localContext = new Context\InstruccionesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_instrucciones);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(22); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(21);
		        	$this->instruccion();
		        	$this->setState(24); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 148) !== 0));
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function instruccion(): Context\InstruccionContext
		{
		    $localContext = new Context\InstruccionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_instruccion);

		    try {
		        $this->setState(33);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__1:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(26);
		            	$this->asignacion();
		            	$this->setState(27);
		            	$this->match(self::T__0);
		            	break;

		            case self::T__6:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(29);
		            	$this->if_stmt();
		            	break;

		            case self::T__3:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(30);
		            	$this->print_stmt();
		            	$this->setState(31);
		            	$this->match(self::T__0);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asignacion(): Context\AsignacionContext
		{
		    $localContext = new Context\AsignacionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_asignacion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(35);
		        $this->match(self::T__1);
		        $this->setState(36);
		        $this->match(self::ID);
		        $this->setState(37);
		        $this->match(self::T__2);
		        $this->setState(38);
		        $this->recursiveExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function print_stmt(): Context\Print_stmtContext
		{
		    $localContext = new Context\Print_stmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_print_stmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(40);
		        $this->match(self::T__3);
		        $this->setState(41);
		        $this->match(self::T__4);
		        $this->setState(42);
		        $this->match(self::ID);
		        $this->setState(43);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function if_stmt(): Context\If_stmtContext
		{
		    $localContext = new Context\If_stmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_if_stmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(45);
		        $this->match(self::T__6);
		        $this->setState(46);
		        $this->cond();
		        $this->setState(47);
		        $this->match(self::T__7);
		        $this->setState(48);
		        $this->instrucciones();
		        $this->setState(49);
		        $this->match(self::T__8);
		        $this->setState(55);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(50);
		        	$this->match(self::T__9);
		        	$this->setState(51);
		        	$this->match(self::T__7);
		        	$this->setState(52);
		        	$this->instrucciones();
		        	$this->setState(53);
		        	$this->match(self::T__8);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 12;
			$this->enterRecursionRule($localContext, 12, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(67);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__10:
				    	$localContext = new Context\OpUnariaContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(58);
				    	$this->match(self::T__10);
				    	$this->setState(59);
				    	$this->recursiveExpr(6);
				    	break;

				    case self::T__4:
				    	$localContext = new Context\AgrupacionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(60);
				    	$this->match(self::T__4);
				    	$this->setState(61);
				    	$this->recursiveExpr(0);
				    	$this->setState(62);
				    	$this->match(self::T__5);
				    	break;

				    case self::NUMBER:
				    	$localContext = new Context\AtomoContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(64);
				    	$this->match(self::NUMBER);
				    	break;

				    case self::T__1:
				    	$localContext = new Context\AtomoContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(65);
				    	$this->match(self::T__1);
				    	$this->setState(66);
				    	$this->match(self::ID);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(77);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(75);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
							case 1:
							    $localContext = new Context\OpAritmeticaContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(69);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(70);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__11 || $_la === self::T__12)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(71);
							    $this->recursiveExpr(6);
							break;

							case 2:
							    $localContext = new Context\OpAritmeticaContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(72);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(73);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__10 || $_la === self::T__13)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(74);
							    $this->recursiveExpr(5);
							break;
						} 
					}

					$this->setState(79);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function cond(): Context\CondContext
		{
		    $localContext = new Context\CondContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_cond);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(80);
		        $this->recursiveExpr(0);
		        $this->setState(81);
		        $this->opRel();
		        $this->setState(82);
		        $this->recursiveExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function opRel(): Context\OpRelContext
		{
		    $localContext = new Context\OpRelContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_opRel);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(84);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2064384) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 6:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 5);

			    case 1:
			        return $this->precpred($this->ctx, 4);
			}

			return true;
		}
	}
}

namespace App\Generated\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Generated\GrammarParser;
	use App\Generated\GrammarVisitor;
	use App\Generated\GrammarListener;

	class RootContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_root;
	    }

	    public function instrucciones(): ?InstruccionesContext
	    {
	    	return $this->getTypedRuleContext(InstruccionesContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRoot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRoot($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRoot($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InstruccionesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_instrucciones;
	    }

	    /**
	     * @return array<InstruccionContext>|InstruccionContext|null
	     */
	    public function instruccion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstruccionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstruccionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInstrucciones($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInstrucciones($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInstrucciones($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InstruccionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_instruccion;
	    }

	    public function asignacion(): ?AsignacionContext
	    {
	    	return $this->getTypedRuleContext(AsignacionContext::class, 0);
	    }

	    public function if_stmt(): ?If_stmtContext
	    {
	    	return $this->getTypedRuleContext(If_stmtContext::class, 0);
	    }

	    public function print_stmt(): ?Print_stmtContext
	    {
	    	return $this->getTypedRuleContext(Print_stmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInstruccion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInstruccion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInstruccion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_asignacion;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAsignacion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsignacion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsignacion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Print_stmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_print_stmt;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrint_stmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrint_stmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrint_stmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class If_stmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_if_stmt;
	    }

	    public function cond(): ?CondContext
	    {
	    	return $this->getTypedRuleContext(CondContext::class, 0);
	    }

	    /**
	     * @return array<InstruccionesContext>|InstruccionesContext|null
	     */
	    public function instrucciones(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstruccionesContext::class);
	    	}

	        return $this->getTypedRuleContext(InstruccionesContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIf_stmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIf_stmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIf_stmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_expr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AgrupacionContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAgrupacion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAgrupacion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAgrupacion($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class OpAritmeticaContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterOpAritmetica($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitOpAritmetica($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitOpAritmetica($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AtomoContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUMBER, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAtomo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAtomo($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAtomo($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class OpUnariaContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterOpUnaria($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitOpUnaria($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitOpUnaria($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CondContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_cond;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    public function opRel(): ?OpRelContext
	    {
	    	return $this->getTypedRuleContext(OpRelContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterCond($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitCond($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitCond($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OpRelContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_opRel;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterOpRel($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitOpRel($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitOpRel($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}