# homunculus Inc. — Refero Style

- Refero URL: https://styles.refero.design/style/68076c4e-f1a6-4d31-9629-cc1af14d9dc5
- Site URL: https://homunculus.jp
- ID: 68076c4e-f1a6-4d31-9629-cc1af14d9dc5
- Theme: dark
- Industry: agency
- Created: 2026-04-30T03:00:10.498Z
- Ranks: newest: 252, popular: 624, trending: 479

> Shimmering digital night

## Description

Homunculus operates as a nocturnal canvas, utilizing deep charcoal and stark black surfaces as its primary landscape. Text and interactive elements are rendered in crisp white, creating sharp, high-contrast points of interest. Typography is compact and precise, emphasizing an understated, almost technical aesthetic. Visual interest is introduced through subtle, organic, iridescent forms that hint at movement and depth, acting as the site's sole chromatic accent.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Base | #000000 | neutral | Page background, primary surface, deep shadow base for visual elements |
| Ghost | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Dark Slate | #383838 | neutral | Secondary background layer, subtle surface elevation, muted text |
| Light Asphalt | #6f6f6f | neutral | Tertiary text, subtle dividers, inactive states |
| Silver Dust | #dddddd | neutral | Subtle background accents, very faint borders, ghost element outlines |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | serif | 400 | 16px | 1.20 | Standard body text, often used for content and paragraphs where traditional readability is key. Its serif nature provides a classic counterpoint to the site's modern structure. |
| urw-din | Segoe UI, Arial, sans-serif | 400 | 12px, 13px, 14px | 1.20 | Functional text for navigation, labels, and small UI details. Its consistent, condensed letterforms enable a compact and precise display across varying sizes. Some uses feature increased letter-spacing to emphasize small, all-caps elements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | -0.96 |
| body | 14 | 1.2 | 2.8 |
| body-lg | 16 | 1.2 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "",
  "cardPadding": "8px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Interactive text link for site navigation and social media.

Uses 'Ghost' text color (#ffffff) with 'urw-din' font at 13px (0.20em letter-spacing) for primary nav and 12px (0.08em letter-spacing) for social links. The active or hovered state typically involves a subtle border or underline animation, derived from primary elements.

### Logo / Site Identity

**Role:** Brand mark for the website.

A 'Ghost' colored (#ffffff) circular shape containing a stylized 'h' in 'urw-din' font, typically positioned at the top-left of the viewport. A primary, unobtrusive visual anchor.

### Section Divider / Rule

**Role:** Subtle visual separation between content blocks.

A single hairline stroke, using 'Ghost' color (#ffffff) or 'Light Asphalt' (#6f6f6f), acting as a minimal horizontal or vertical separator. Used for visual rhythm without heavy framing.

### Scroll Indicator

**Role:** Call-to-action for scrolling down the page.

Minimal text 'scroll' in 'Ghost' color (#ffffff) using 'urw-din' font, accompanied by a subtle animated visual cue like a downward arrow or line animation. Often placed vertically and subtly.

## Do's

- Prioritize 'Midnight Base' (#000000) for all large background areas to maintain the dark, immersive aesthetic.
- Use 'Ghost' (#ffffff) for all primary text and interactive elements to ensure high contrast and legibility.
- Apply 'urw-din' at 13px with 0.20em letter-spacing for prominent UI text like navigation, and 12px with 0.08em letter-spacing for secondary labels like social links.
- Introduce white or light gray hairline borders (1px solid #ffffff or #dddddd) for subtle content division and element outlining.
- Maintain a compact horizontal spacing of 10px between inline elements like navigation links.
- When placing small elements within a larger container, ensure 8px vertical padding to create minimal breathing room.

## Don'ts

- Avoid introducing bright or saturated colors except for the organic graphic elements or as very subtle, functional accents.
- Do not use heavy shadows or gradients on UI elements; the design emphasizes flatness and subtle contrast.
- Refrain from using traditional serif fonts for functional UI elements; 'Times' is reserved for body text to distinguish content from interface.
- Do not use large, multi-column grids for content where fluid, single-axis scrolling is intended; prioritize stacking for narrative flow.
- Avoid complex, multi-level card structures or panels that add visual bulk; surfaces should remain understated.
- Do not employ radii on UI elements; corners should remain sharp to maintain a precise, technical feel.

## Layout

The page uses a full-bleed layout, stretching content to the viewport edges without a dedicated max-width container, creating an immersive experience. The hero section is full-viewport, featuring the subtle, dark-on-dark branding and abstract graphics with minimal text elements positioned for high impact. Overall section rhythm is fluid and seamless, with subtle horizontal lines serving as dividers. Content typically stacks in a single, focused column or uses implicit spacing for element arrangement. Navigation is a minimalist top-right cluster of 'CONTACT' and social links, alongside a top-left brand mark. Density is spacious, emphasizing the abstract background rather than information overload.

## Imagery

This site features abstract, organic, fluid forms with iridescent, swirling colors. These visuals serve as atmospheric, decorative elements rather than explanatory content. They are full-bleed against the dark background, with soft, undefined edges, creating a sense of subtle movement and depth. There is no traditional photography, illustration, or product imagery. Icons are minimal, represented by the 'h' logo and simple lines for navigation.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe (early dark mode) | Monochrome base with minimal, focused typographic hierarchy and abstract background patterns. |
| Awwwards Nominees (some portfolios) | Dark, immersive canvases with sparse, precise typography and abstract, often animated, background visuals. |
| Active Theory | Emphasis on experiential, full-bleed dark visuals with minimal UI and abstract, flowing graphics. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a minimalist page header: 'Midnight Base' (#000000) background. Left-aligned logo area contains a 'Ghost' (#ffffff) 'h.' brand mark (urw-din, 16px). Right-aligned navigation with 'CONTACT' (urw-din, 13px, #ffffff, 0.20em letter-spacing) and social links 'FB' 'TW' (urw-din, 12px, #ffffff, 0.08em letter-spacing). Elements within navigation are spaced 10px horizontally.
2. Design a primary page section: Full-width, 'Midnight Base' (#000000) background. Center-aligned, subtle animated organic graphic. A 'scroll' indicator (urw-din, 13px, #ffffff, 0.20em letter-spacing) is vertically oriented on the right edge, 8px from the bottom.
3. Create a descriptive text block: 'Dark Slate' (#383838) background (if part of a layered surface). Body text uses 'Times' font, 16px, #ffffff, with standard letter-spacing. Hairline divider beneath the text 1px solid #ffffff.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517993966-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517993966-thumb.jpg |
