# Yung Studio — Refero Style

- Refero URL: https://styles.refero.design/style/2d43b251-ad01-4e59-9068-502457aa0592
- Site URL: https://yung.studio
- ID: 2d43b251-ad01-4e59-9068-502457aa0592
- Theme: dark
- Industry: agency
- Created: 2026-02-04T20:23:32.000Z
- Ranks: newest: 1233, popular: 299, trending: 256

> Monochromatic Command Center. Pure black canvas where sharp white elements punctuate with precision and ample negative space.

## Description

This design system presents a stark, high-contrast aesthetic, mimicking a digital command console. Its core identity is built on pure black and white, creating immediate visual impact. The generous negative space and tight letter-spacing in headlines maintain an air of intentional precision, while the signature 9999px pill-shaped buttons introduce a single, playful soft edge.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Page backgrounds, card backgrounds, text on white buttons – the foundational darkness. |
| Ghost White | #ffffff | neutral | Primary text, button backgrounds, interactive elements – the dominant light element creating high contrast. |
| Accent Violet | #c692ff | brand | Subtle background accents, specific contextual highlights; provides the only chromatic color for visual differentiation. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PolySans-Slim | Inter | 400 | 16px, 20px, 30px, 40px | 1.00, 1.10, 1.35 | Body text, smaller headings, supporting information, links, and various content elements. Its uniform weight contributes to a calm, readable tone across varied text sizes. |
| PolySans-Neutral | Inter | 400 | 60px, 160px | 0.90, 1.10 | Display headings and prominent interactive elements like buttons. The extremely tight letter-spacing at large sizes creates a dense, impactful visual block rather than sprawling text, like a bold declaration. |
| PolySans-Bulky | Inter | 400 | 28px | 1.01 | Specialized links and secondary headings. This family variation offers a bulkier form factor for specific emphasis at a mid-range size. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.35 |  |
| body-lg | 20 | 1.1 |  |
| subheading | 28 | 1.01 | -0.28 |
| heading | 30 | 1.1 | -0.3 |
| heading-lg | 40 | 1 | -0.4 |
| display | 60 | 0.9 | -1.2 |
| display-xl | 160 | 0.9 | -3.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "9999px",
    "default": "10px"
  },
  "elementGap": "20-24px",
  "sectionGap": "60-124px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button Group



### Stat / Metric Block



### Service / Feature Cards



### Primary Action Button

**Role:** Interactive element

White background (`#ffffff`), black text (`#000000`). Fully rounded with `9999px` border-radius. Generous padding: `31.968px` top, `22.032px` bottom, `49.968px` sides. Uses PolySans-Neutral font, weight 400, for clear call to action.

### Naked Content Card

**Role:** Content container

Transparent background (`rgba(0, 0, 0, 0)`) with `0px` border-radius. No box-shadow or padding, integrating seamlessly into the negative space. Used for showcasing work items or article previews.

### Text Link

**Role:** Navigation/Internal link

Uses PolySans-Slim for general links, or PolySans-Bulky at 28px for prominent links. Text color is `Ghost White` (`#ffffff`) against `Midnight Void` (`#000000`), no underline by default.

### Header Logo

**Role:** Brand identity

Uses PolySans-Slim at a 20px size, weight 400, `Ghost White` (`#ffffff`), positioned top-left on the `Midnight Void` (`#000000`) background.

## Do's

- Maintain a strict achromatic palette, using only `Midnight Void` (#000000) for backgrounds and `Ghost White` (#ffffff) for primary foreground elements.
- Apply `9999px` border-radius to all interactive element buttons for a consistent pill shape.
- Utilize PolySans-Neutral with -0.0200em letter-spacing for all significant headings to create a dense, impactful typographic appearance.
- Implement `--obe` (#c692ff) sparingly as the sole chromatic accent, allowing it to highlight specific backgrounds or subtle contextual elements.
- Ensure generous `50px` horizontal padding for content sections and `20-24px` vertical spacing between elements to preserve ample negative space.
- Employ PolySans-Slim as the default font for all body copy and most secondary text at weight 400, ensuring clear readability across sizes.

## Don'ts

- Avoid introducing any additional saturated colors beyond the designated `--ube` (#c692ff) to prevent diluting the distinct monochrome aesthetic.
- Do not use box-shadows or drop shadows; depth is implied solely through stark contrast and generous negative space.
- Refrain from deviating from the specified PolySans typefaces; custom fonts are a core identifier, and system defaults would undermine the brand.
- Do not add borders or background colors to content cards; they should appear as seamless blocks of text on the `Midnight Void` background.
- Avoid using radii other than `0px` for content containers and `9999px` for buttons, to maintain precision and the signature rounded forms.
- Do not clutter content sections; maintain the spacious `50px` horizontal padding and ample vertical element gaps to preserve legibility and impact.

## Imagery

This site features a clean visual language predominantly based on illustration and graphic elements, with minimal and direct application. The hero section displays large, custom, playful illustrations in pure white on a black background, with a hand-drawn, almost explosive quality, acting as a direct visual representation of the 'Yung' brand. The overall impression is that imagery serves a decorative, brand-identity building purpose rather than explanatory content, with a high visual density only in a dedicated hero area, transitioning to text-dominant content. Icons are minimal, represented by the white hamburger menu, suggesting a clean, outlined style. No photography is visible, reinforcing a graphic-first approach.

## Similar Brands

| Business | Why |
| --- | --- |
| Akin Gump | Stark black and white color scheme; emphasis on strong typography and ample negative space for a premium, editorial feel. |
| Baidu Ventures | Dominant dark background with high-contrast white text, using spacious layouts and minimal visual clutter. |
| Huge Inc. | Bold, expressive typography at large sizes often against a dark background, asserting brand identity through text. |
| Figma (dark mode) | Monochromatic focus with a single accent color for interactive elements, maintaining clarity within a dark interface. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `#ffffff`
- Background: `#000000`
- Button Background: `#ffffff`
- Button Text: `#000000`
- Accent: `#c692ff`

### 3-5 Example Component Prompts
1. **Create a Primary Action Button:** Text 'Get Started', background `Ghost White` (`#ffffff`), text `Midnight Void` (`#000000`), `9999px` border-radius. Padding: `31.968px` top, `22.032px` bottom, `49.968px` left and right. Font: PolySans-Neutral, weight 400, size 16px, `1.1` lineHeight, `-0.0200em` letter-spacing.
2. **Design a Hero Section:** Full-bleed `Midnight Void` (`#000000`) background. Headline 'We Define Tomorrow' in PolySans-Neutral, size 160px, weight 400, `0.9` lineHeight, `-0.0200em` letter-spacing, color `Ghost White` (`#ffffff`). Add a sub-headline 'Strategy to Action' in PolySans-Slim, size 40px, weight 400, `1.0` lineHeight, `-0.0100em` letter-spacing, color `Ghost White` (`#ffffff`). A `20px` `marginBottom` should separate headline from sub-headline.
3. **Implement a Content Block:** Background `Midnight Void` (`#000000`). Title 'Featured Work' in PolySans-Slim, size 30px, weight 400, `1.1` lineHeight, `-0.0100em` letter-spacing, color `Ghost White` (`#ffffff`). Body text 'Our latest projects blend design thinking with bold execution.' in PolySans-Slim, size 20px, weight 400, `1.1` lineHeight, `-0.0100em` letter-spacing, `Ghost White` color. Use `50px` horizontal padding for the block and `24px` `marginBottom` between title and body.
4. **Create a Text Link:** Text 'Learn More', font PolySans-Bulky, size 28px, weight 400, `1.01` lineHeight, `-0.0100em` letter-spacing, color `Ghost White` (`#ffffff`). No underline, no background, and no padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925291436-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925291436-thumb.jpg |
