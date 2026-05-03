# Slingshot — Refero Style

- Refero URL: https://styles.refero.design/style/e683efcd-b005-4a35-a5ea-d25bcf3de5c0
- Site URL: https://www.useslingshot.com
- ID: e683efcd-b005-4a35-a5ea-d25bcf3de5c0
- Theme: light
- Industry: saas
- Created: 2026-04-30T03:44:03.753Z
- Ranks: newest: 81, popular: 1045, trending: 968

> Crisp canvas, vivid action.

## Description

Slingshot employs a practical and approachable interface, using a bright white canvas offset by soft, almost achromatic background shades. A single vibrant blue acts as the primary accent, drawing attention to calls to action and interactive elements. Typography is bold and direct for headings, while body text remains clear and functional. Components favor rounded corners and minimal elevation, presenting information without visual clutter.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #241f37 | neutral | Primary text, prominent headings — provides strong contrast against light backgrounds |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, default UI elements. The base layer for all content |
| Sky Blue | #ecf2ff | neutral | Subtle secondary background surface, often for cards or sections, providing a soft visual break from Canvas White |
| Pale Peach | #fff4ec | neutral | Minor accent background, possibly for callouts or contextual sections |
| Mint Glaze | #edf9f5 | neutral | Subtle contextual background, used sparingly |
| Action Blue | #1a5fff | brand | Primary action buttons, active interactive elements, and decorative accents — signifies interactivity and brand presence |
| Accent Orange | #ff7a1a | accent | Decorative highlights, strokes, and small accent elements, providing secondary visual interest |
| Accent Green | #359774 | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Gopher | Open Sans | 400, 500 | 24px, 32px, 56px | 1.00 | Prominent headings and titles. The ultra-tight line height (1.0) and lack of letter spacing create a dense, impactful statement, giving it a confident and contemporary feel. |
| Inter | system-ui | 400 | 12px, 14px, 16px | 1.14, 1.20, 1.33 | Body text and functional interface elements, ensuring readability across various content densities and providing a modern, clear voice. |
| Inter | system-ui | 400 | 12px, 14px, 16px | 1.14, 1.20, 1.33 | Small, emphasized text such as tags or labels. The generous letter spacing and line height set it apart, making short phrases highly visible. |
| Inter | system-ui | 400 | 12px, 14px, 16px | 1.14, 1.20, 1.33 | Strong emphasis within body text and some button labels. Provides clear hierarchy for important information without resorting to larger sizes. |
| Inter-Bold |  | 700 | 14px, 16px | 1.14, 1.6 | Inter-Bold — detected in extracted data but not described by AI |
| Inter-SemiBold |  | 600 | 12px | 2 | Inter-SemiBold — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.14 | 0.083 |
| body | 14 | 1.33 |  |
| heading | 24 | 1 |  |
| heading-lg | 32 | 1 |  |
| display | 56 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "43px",
    "cards": "24px",
    "buttons": "6px",
    "default": "12px"
  },
  "elementGap": "16px",
  "sectionGap": "40px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Secondary Ghost Button

**Role:** Navigational or secondary actions where visual prominence is low.

Text only, `sans-serif` at 12px, default browser blue text color (#0000ee - this is a system color, not branded). No discernible background or border in its ghost state.

### Outline Action Button (Nav)

**Role:** Navigation or login actions, indicating an interactive element without being primary.

Background: `Canvas White` (#ffffff), Text: default browser blue (#0000ee), Border: default browser blue (#0000ee), Radius: 43px, Padding: 8px vertical, 16px horizontal. Font: `sans-serif`.

### Ghost Accent Button

**Role:** Lightweight, secondary actions or internal links within content.

Background: `Sky Blue` (#ecf2ff), Text: black (#000000), Border: black (#000000), Radius: 6px, Padding: 4px vertical, 10px horizontal. Font: `sans-serif`.

### Primary Filled Button

**Role:** Main calls to action on the page, highly visible and interactive.

Background: `Action Blue` (#1a5fff), Text: default browser blue (#0000ee) (this is an unusual choice, effectively making the text visible by being the *same* as the active button 'color' for the browser default), Border: default browser blue (#0000ee) (again, usually a system default that would be overridden), Radius: 0px. Padding: 0px vertical, 60px horizontal. Font `sans-serif`.

### Testimonial Card

**Role:** Showcasing client feedback, a floating element with subtle visual depth.

Background: `Canvas White` (#ffffff), No border, No shadow, Radius: 24px, Padding: 0px.

### Feature Card

**Role:** Highlighting product features or key information blocks.

Background: `Sky Blue` (#ecf2ff), No border, No shadow, Radius: 24px, Padding: 24px.

### Content Block Card

**Role:** Encapsulating longer form textual content or aggregated information.

Background: `Canvas White` (#ffffff), No border, No shadow, Radius: 12px, Padding: 32px.

## Do's

- Prioritize `Action Blue` (#1a5fff) for primary calls to action, active states, and critical interactive elements.
- Use `Gopher` with a line height of 1.0 for all primary headings to maintain a dense, impactful visual.
- Employ `Canvas White` (#ffffff) as the default background for general page content and prominent cards.
- Utilize `Sky Blue` (#ecf2ff) for secondary background surfaces, subtle card backgrounds, or distinct content sections.
- Apply a `24px` border-radius to large cards and content blocks, and `6px` for buttons, to create a consistent soft aesthetic.
- Maintain a default `16px` element gap for vertical spacing between most content elements.
- Use `Midnight Ink` (#241f37) for all body copy and most important text elements.

## Don'ts

- Avoid using multiple vivid colors; reserve saturation primarily for `Action Blue` (#1a5fff) and sparingly for `Accent Orange` (#ff7a1a).
- Do not introduce sharp corners; consistently apply radii of at least `6px` on interactive elements and `12px` on cards.
- Refrain from heavy shadows or gradient backgrounds; surfaces should appear flat or with minimal, subtle tinting.
- Do not deviate from the specified font families and weight combinations; `Gopher` for headings, `Inter` for body/functional text.
- Avoid line heights greater than 1.6 for body text, or higher than 1.0 for headers, to prevent excessive vertical spacing.
- Do not use generic gray tones for text that are not `Midnight Ink` (#241f37) or black (#000000), as `Midnight Ink` is the established primary dark text color.
- Do not use highly textured backgrounds; stick to solid color fills, predominantly light neutrals.

## Layout

The page primarily uses a max-width contained layout, with content sitting within a central column. The hero section features a prominent, left-aligned headline and text block, paired with a grid of product images on the right. Subsequent sections often employ an alternating text-left/visual-right pattern. Vertical spacing between sections is generous and consistent. Some sections use `Sky Blue` (#ecf2ff) or `Pale Peach` (#fff4ec) backgrounds to create visual breaks. Navigation is a sticky top bar with brand logo left and text links and an outlined button on the right.

## Imagery

The site uses a combination of product photography and abstract, colorful illustrations. Product photos feature tight crops of swag items (hats, stickers, shirts) arranged in grid-like patterns, often on a pure white or light gray background, highlighting the items themselves without lifestyle context. Illustrations are abstract and colorful, often rounded or organic in shape, serving as decorative accents or visual metaphors without strong outlines. Icons, when present, are simple and outlined with a medium stroke weight. Imagery primarily serves to showcase products and add decorative atmosphere without dominating the layout.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a clean white background, functional typography, and a single vibrant brand color for accents and CTAs. |
| Framer | Similar use of generous spacing, soft rounded corners, and clear information hierarchy through typography on a light canvas. |
| Linear | Employs an emphasis on crisp surfaces, restrained use of color, and high legibility with direct, sans-serif typography. |
| Webflow | Features a light, spacious layout with a focus on product visuals and distinct, but not overwhelming, accent colors for interactivity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #241f37 (Midnight Ink)
- background: #ffffff (Canvas White)
- border: no distinct border color
- accent: #ff7a1a (Accent Orange)
- primary action: #1a5fff (filled action)

Example Component Prompts:
- Create a Hero Section headline: Gopher font, weight 500, 56px, line-height 1.0, color #241f37, no letter spacing. Text: 'Event Swag Management Without the Busywork.'
- Generate a Secondary Ghost Button: sans-serif font, 12px, default browser blue text color. Text: 'Case Studies'.
- Create a Primary Action Button: #1a5fff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create a Feature Card: Sky Blue background (#ecf2ff), 24px radius, 24px padding. Headline with Gopher font, weight 400, 24px, line-height 1.0, color #241f37. Body text with Inter font, weight 400, 14px, line-height 1.33, color #241f37.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520603007-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520603007-thumb.jpg |
