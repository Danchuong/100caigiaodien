# Evermade — Refero Style

- Refero URL: https://styles.refero.design/style/b22f68eb-7ed1-47b6-995e-2c0afc79ac7e
- Site URL: https://evermade.fi
- ID: b22f68eb-7ed1-47b6-995e-2c0afc79ac7e
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:53:28.144Z
- Ranks: newest: 35, popular: 1017, trending: 882

> Burgundy Canvas, Vivid Pink Accents

## Description

Evermade employs a confident, art-inspired visual language that merges stark elegance with playful, vivid accents. The primary palette is a dark, warm burgundy grounded by soft, humanistic neutrals, creating a refined backdrop. Typography features a strong contrast between classic serif display fonts and clean geometric sans-serifs, communicating authority and approachability. Components are lightweight with distinctive full rounded corners, emphasizing an open, modern aesthetic rather than heavy panels or complex shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White Canvas | #ffffff | neutral | Main page background, content surfaces, subtle overlay for text over imagery |
| Rich Burgundy | #2d070b | brand | Primary background for dark sections, prominent text, card borders, and primary button text. Conveys gravitas and brand identity |
| Vivid Pink | #ff0389 | accent | Accent for interactive elements, links, decorative borders, and active states. Provides high-contrast punctuation against dark backgrounds and a playful pop |
| Blush Sand | #fef0e6 | neutral | Soft secondary background for content sections and cards, creating a warm, approachable surface. Humanizes the overall dark theme |
| Pale Rose | #ffdce2 | neutral | Subtle background for card elements, offering a slightly cooler variation of the Blush Sand |
| Ash Black | #000000 | neutral | Secondary text color, subtle borders, and specific background elements. Provides strong contrast when needed |
| Hint of Rose | #ffc7de | accent | Muted accent color for light highlights, softer interactive states, and informational text against warm backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Instrument Serif | Playfair Display | 400 | 32px, 48px, 128px | 1.10, 1.40 | Display headlines and hero text. This classic serif, particularly at 128px, provides a bold, artistic, and authoritative statement, contrasting with the geometric sans-serifs. |
| Manrope | Inter | 400 | 12px, 14px, 18px, 22px | 1.10, 1.20, 1.40 | Primary body text, longer form content, and call-to-action text. Its geometric sans-serif nature ensures high readability and a clean, modern feel across various sizes. |
| DM Mono | IBM Plex Mono | 300, 400, 500 | 11px, 14px, 16px, 32px | 1.25, 1.40, 1.60 | Captions, tags, labels, and small UI elements. The monospace characteristic lends a subtle technical and precise aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 | 0.44 |
| body | 14 | 1.4 | 0.13 |
| heading | 18 | 1.2 | -0.18 |
| heading-lg | 22 | 1.1 | -0.22 |
| display-sm | 32 | 1.1 | -0.32 |
| display | 48 | 1.1 | -0.48 |
| display-xl | 128 | 1.1 | -1.28 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "soft": "8px",
    "default": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "178px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Button Primary

**Role:** Primary Call to Action

Ghost button with 1px Rich Burgundy border, Rich Burgundy text, and full pill radius (9999px). Padding 16px vertical, 32px horizontal. This button style makes actions feel inherent to the content flow rather than a heavy interactive block.

### Outlined Button Secondary

**Role:** Secondary Call to Action, larger variant

Ghost button with 1px Rich Burgundy border, Rich Burgundy text, and full pill radius (9999px). Padding 18px vertical, 52px horizontal.

### Pill Tag

**Role:** Categorization and filter tags

Rounded tag with Pale Rose background (#ffdce2), Rich Burgundy text, and full pill radius (9999px). Padding 4px vertical, 12px horizontal. Used for subtle categorization within content blocks.

### Content Card Default

**Role:** Standalone content block

Card with no background fill and `none` box shadow, 0px border radius. Used for transparently presenting content without visual heavy lifting.

### Content Card with Soft Corners

**Role:** Elevated content block for articles/insights

Card with no background fill, 8px border radius. Used for article previews and product features, offering a subtle visual grouping.

## Do's

- Use Rich Burgundy (#2d070b) as the primary text and section background for gravitas.
- Apply Vivid Pink (#ff0389) exclusively for interactive elements like links, buttons, and active states to guide user attention.
- Set display headlines with Instrument Serif (weight 400) at generous sizes like 48px or 128px for artistic impact with -0.010em letter spacing.
- Utilize Manrope (weight 400) for all body text at 18px with -0.010em letter spacing for clear, modern readability.
- Employ DM Mono at 11-14px for all captions, tags, and meta-information, using its distinct letter spacings (e.g., 0.040em at 11px) for a technical touch.
- Ensure all buttons and small interactive tags have a 9999px border-radius for a distinct pill-shaped appearance.
- Maintain a comfortable density with an element gap of 4px and a card padding of 12px to allow content to breathe.

## Don'ts

- Do not use Vivid Pink (#ff0389) as a background for large sections or containers; reserve it for small, functional accents.
- Avoid using drop shadows on cards; the system relies on background color shifts and borders for visual separation.
- Do not vary typography for non-hierarchical emphasis; rely on color accents or DM Mono for distinct information types.
- Do not introduce sharp corners (0px radius) for interactive elements; all buttons and tags must use 9999px radius.
- Do not stack multiple background colors directly adjacent without an intervening content block; use Blush Sand (#fef0e6) and Pale Rose (#ffdce2) for distinct section shifts.
- Avoid using too many font weights; stick to the defined weights for each font family (e.g., Manrope 400, Instrument Serif 400, DM Mono 300, 400, 500).

## Layout

The page structure employs a mixed full-bleed and contained pattern. Hero sections are typically full-bleed with large, dramatic imagery and centered, oversized typography. Subsequent content sections alternate background colors (White Canvas, Blush Sand, Rich Burgundy) with consistent vertical spacing akin to the sectionGap. Content is arranged in alternating text-left/image-right or centered stacks. Card grids are prominent for displaying articles and insights, suggesting a responsive, column-based layout. Navigation is minimal, likely a top-bar or slide-out, as the focus is on large, expressive content blocks.

## Imagery

Imagery primarily utilizes full-bleed, high-contrast photography or stylized product screenshots often with a desaturated or tinted overlay, creating a dramatic, art-directed atmosphere. These are frequently masked or partially obscured when in the background. Illustrations are minimal and typically flat, serving as decorative elements or supporting icons. Icons themselves are outlined, thin-stroke, and monochrome, often in Ash Black or Vivid Pink, maintaining a lightweight and precise feel. Imagery serves to establish mood and brand identity rather than detailed informational content, often featuring abstract compositions or product-in-use shots.

## Similar Brands

| Business | Why |
| --- | --- |
| Basic Agency | Both use a limited, high-contrast color palette with one dominant accent color for interaction and a mix of classic serif and modern sans-serif fonts for a sophisticated, artistic feel. |
| Figma | The use of soft, humanistic pastel neutrals against darker brand colors, combined with clean typography and precise component treatments, creates a similar contemporary yet inviting digital product aesthetic. |
| B&O (Bang & Olufsen) | Shares a premium, minimalist aesthetic with rich, deep background colors, subtle surface variations, and a strong emphasis on typography as a primary visual element, using vivid accents sparingly for interaction. |

## Custom Sections

### Agent Prompt Guide

Create an Outlined Primary Action: Transparent background, #ff0389 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
Example Component Prompts:
Create a hero section: Rich Burgundy (#2d070b) background. Headline 'We build the next' in Instrument Serif 128px weight 400, #ff0389, letter-spacing -1.28px. Centered. Below, a ghost button: 'Let's build the next' with text #ff0389, 1px border #ff0389, 9999px radius, 18px 52px padding.
Create a content card: Pale Rose (#ffdce2) background, 8px radius. Heading 'EverTalk: Why every website needs a strategy?' in Manrope 22px weight 400, #2d070b, letter-spacing -0.22px. Below, a Pill Tag 'STRATEGY' with Pale Rose (#ffdce2) background, Rich Burgundy (#2d070b) text, 9999px radius, 4px 12px padding.
Create a navigation link: 'strategy' in DM Mono 14px weight 400, #2d070b, letter-spacing 0.009em. On hover, text color changes to #ff0389.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521183861-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521183861-thumb.jpg |
