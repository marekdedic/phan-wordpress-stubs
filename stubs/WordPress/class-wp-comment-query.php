<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Comment_Query {
	/**
	 * @var array{author_email?: string, author_url?: string, author_in?: array<int>, author_not_in?: array<int>, comment_in?: array<int>, comment_not_in: array<int>, count?: bool, date_query?: array<mixed>, fields?: string, ID?: int, include_unapproved?: array<string>, karma?: int, meta_key?: string|array<string>, meta_value?: string|array<string>, meta_compare?: string, meta_compare_key?: string, meta_type?: string, meta_type_key?: string, meta_query?: array<mixed>, number?: int, paged?: int, offset?: int, no_found_rows?: bool, orderby?: string|array<string>, order: string, parent?: int, parent_in?: array<int>, parent_not_in?: array<int>, post_author_in?: array<int>, post_author_not_in?: array<int>, post_ID?: int, post_id?: int, post_in: array<int>, post_not_in?: array<int>, post_author?: int, post_status?: string|array<string>, post_type?: string|array<string>, post_name?: string, post_parent?: int, search?: string, status?: string|array<string>, tape?: string|array<string>, type_in?: array<string>, type_not_in?: array<string>, hierarchical?: bool|string, cache_domain?: string, update_comment_meta_cache?: bool, update_comment_post_cache?: bool} {
	 *     @type string               $author_email
	 *     @type string               $author_url
	 *     @type array<int>           $author_in
	 *     @type array<int>           $author_not_in
	 *     @type array<int>           $comment_in
	 *     @type array<int>           $comment_not_in
	 *     @type bool                 $count
	 *     @type array                $date_query
	 *     @type string               $fields
	 *     @type int                  $ID
	 *     @type array<string>        $include_unapproved
	 *     @type int                  $karma
	 *     @type string|array<string> $meta_key
	 *     @type string|array<string> $meta_value
	 *     @type string               $meta_compare
	 *     @type string               $meta_compare_key
	 *     @type string               $meta_type
	 *     @type string               $meta_type_key
	 *     @type array                $meta_query
	 *     @type int                  $number
	 *     @type int                  $paged
	 *     @type int                  $offset
	 *     @type bool                 $no_found_rows
	 *     @type string|array<string> $orderby
	 *     @type string               $order
	 *     @type int                  $parent
	 *     @type array<int>           $parent_in
	 *     @type array<int>           $parent_not_in
	 *     @type array<int>           $post_author_in
	 *     @type array<int>           $post_author_not_in
	 *     @type int                  $post_ID
	 *     @type int                  $post_id
	 *     @type array<int>           $post_in
	 *     @type array<int>           $post_not_in
	 *     @type int                  $post_author
	 *     @type string|array<string> $post_status
	 *     @type string|array<string> $post_type
	 *     @type string               $post_name
	 *     @type int                  $post_parent
	 *     @type string               $search
	 *     @type string|array<string> $status
	 *     @type string|array<string> $type
	 *     @type array<string>        $type_in
	 *     @type array<string>        $type_not_in
	 *     @type bool|string          $hierarchical
	 *     @type string               $cache_domain
	 *     @type bool                 $update_comment_meta_cache
	 *     @type bool                 $update_comment_post_cache
	 * }
	 */
	public $query_vars;
}
