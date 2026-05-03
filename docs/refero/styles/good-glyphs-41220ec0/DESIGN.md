# Good Glyphs — Refero Style

- Refero URL: https://styles.refero.design/style/41220ec0-ca0d-4697-a2fc-7a9a50d52e7c
- Site URL: https://goodglyphs.com
- ID: 41220ec0-ca0d-4697-a2fc-7a9a50d52e7c
- Theme: light
- Industry: design
- Created: 2026-04-30T04:01:18.230Z
- Ranks: newest: 4, popular: 441, trending: 257

> Neon Playbill on Black Canvas

## Description

Good Glyphs embraces a stark, high-contrast aesthetic, juxtaposing a vibrant, almost neon green background with severe black text and containers. Typography is a dominant visual element, using an ultra-large, compressed sans-serif for headlines that conveys an irreverent, playful attitude. Interface elements are minimal, relying on strong borders and generous radii, with interactive states signaled primarily through color inversion rather than complex shadows or gradients. The overall atmosphere is punchy, high-energy, and digital-native.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ghostly Green | #c7ffcd | brand | Page background, light surfaces, interactive element highlights, and active text on dark backgrounds |
| Midnight Ink | #000000 | neutral | Primary text, deep background for cards and interactive components, borders for all elements, and the base color for all UI controls |
| Slate Text | #101010 | neutral | Input text and subtle input borders, a slightly lighter variant of Midnight Ink used for specific form fields |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica Neue | Arial | 300, 400 | 13px, 14px, 28px, 288px | 0.80, 1.20, 1.50 | Body copy, links, general text, and some headings. The tight letter-spacing gives it a compact, modern feel. |
| good-glyphs | System icons (fallback) | 400 | 288px | 1.00, 1.20 | Primary display font for decorative glyphs and large, impactful visual statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 | -0.39 |
| heading | 28 | 1.2 | -0.84 |
| display | 288 | 0.8 | -8.64 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "14px",
    "other": "14px",
    "buttons": "140px"
  },
  "elementGap": "4px",
  "sectionGap": "84px",
  "cardPadding": "42px",
  "pageMaxWidth": null
}
```

## Components

### Default Button

**Role:** Standard interactive element with minimal styling.

Text: Midnight Ink (#000000), Helvetica Neue, 4px padding (top, right, left), 1px (bottom). Border: 1px solid Midnight Ink (#000000). Background: transparent. Border-radius: 10% (for square buttons), 140px (for pill-shaped buttons).

### Inverted Button

**Role:** Action-oriented button with high contrast.

Text: Ghostly Green (#c7ffcd), Helvetica Neue. Background: Midnight Ink (#000000). Padding: 4px (top, right, left), 1px (bottom). Border: 1px solid Midnight Ink (#000000). Border-radius: 10% (for square buttons).

### Download Button

**Role:** Primary call to action.

Text: Midnight Ink (#000000), Helvetica Neue. Background: Ghostly Green (#c7ffcd). Border: 1px solid Midnight Ink (#000000). Border-radius: 140px. Padding (implicit): 0px — relies on intrinsic text spacing.

### Contributor Card

**Role:** Displays individual entries for designers.

Background: Midnight Ink (#000000). Border-radius: 14px. Padding-bottom: 42px. No box shadow.

### Text Input (Default)

**Role:** Basic text input field.

Text: Midnight Ink (#000000), Helvetica Neue. Background: transparent. Border: 1px solid Midnight Ink (#000000) on top. Border-radius: 0px. No padding defined by component; relies on content.

### Text Input (Active)

**Role:** Text input field in a focused or active state.

Text: Slate Text (#101010), Helvetica Neue. Background: transparent. Border: 1px solid Slate Text (#101010) on top. Border-radius: 0px. No padding defined by component; relies on content.

## Do's

- Prioritize Midnight Ink (#000000) for all text and UI outlines against Ghostly Green (#c7ffcd) backgrounds for maximum contrast.
- Apply a generous border-radius of 140px for all button shapes that are pill-like, and 14px for cards and container corners.
- Use Helvetica Neue with -0.0300em letter-spacing for all body text and secondary headings to maintain a dense, compact feel.
- Employ the 'good-glyphs' font strictly for large, decorative, glyph-based display elements.
- Use 4px as the foundational unit for small element spacing, such as padding inside buttons.
- Ensure all interactive elements reverse their color scheme upon activation, for example, from Ghostly Green text on Midnight Ink background to Midnight Ink text on Ghostly Green background.
- Utilize 14px for vertical spacing between smaller content blocks or lists, and 84px for large section separation.

## Don'ts

- Avoid using gradients or complex box-shadows; maintain a flat, high-contrast aesthetic.
- Do not introduce additional color beyond Ghostly Green, Midnight Ink, and Slate Text, except where specific brand assets necessitate it.
- Do not vary the letter-spacing for Helvetica Neue beyond -0.0300em unless specifically for the 'good-glyphs' display font.
- Avoid complex layouts; favor centered content stacks or simple grid structures.
- Do not use subtle elevation cues like soft shadows; interaction should be indicated through color changes or strong borders.
- Do not use the 'good-glyphs' font for standard body text or headings due to its decorative nature.
- Avoid padding within input elements where default browser styles are visually sufficient; rely on the minimal border emphasis.

## Layout

The page primarily uses a full-bleed layout, taking advantage of the large background color. The hero section is characterized by ultra-large, compressed typography layered directly onto the background, followed by a contrasting full-width dark section. Content then alternates between a max-width centered stack for body text and a three-column grid for 'Contributors' cards, maintaining consistent vertical spacing. Navigation is minimal, consisting of a sticky top-right link.

## Imagery

The site primarily uses custom dingbat-style vector illustrations from the 'good-glyphs' font. These are graphic, black-and-white, outline icons with a quirky, playful, and sometimes abstract aesthetic. They are used decoratively within card components, demonstrating the font's content. There are no photographs or complex 3D renders; the visual emphasis is on stylized, flat vector art.

## Similar Brands

| Business | Why |
| --- | --- |
| Fonts In Use | Uses a very stark, high-contrast typography-focused design with minimal color outside of text and functional elements. |
| Brutalism.website | Embraces a 'brutalist' aesthetic with strong borders, high contrast colors, and unconventional typography choices. |
| The Brand Identity | Features a strong emphasis on typography as a primary visual element, often with large, impactful headlines. |
| Supremo | Known for bold, experimental typography, high-contrast color palettes, and a minimalist but impactful UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #c7ffcd
border: #000000
accent: #c7ffcd
primary action: #c7ffcd (filled action)

Example Component Prompts:
1. Create a hero section: 'Ghostly Green' background (#c7ffcd). Headline (good-glyphs, weight 400, 288px, lineHeight 0.8, normal letter-spacing, Midnight Ink #000000). Subtitle (Helvetica Neue, weight 400, 28px, lineHeight 1.2, -0.0300em letter-spacing, Midnight Ink #000000).
2. Create a 'Download' button: Background 'Ghostly Green' (#c7ffcd), text 'Midnight Ink' (#000000), 'Helvetica Neue' font, 140px border-radius, 1px solid 'Midnight Ink' border. Text should be 'Donate & Download'.
3. Create a 'Contributor' card: 'Midnight Ink' background (#000000), 14px border-radius, padding-bottom 42px. Inside, place a 'Good Glyphs' icon (good-glyphs font, 288px, Midnight Ink #000000) and Helvetica Neue body text (14px, #c7ffcd, -0.0300em letter-spacing) for designer name.
4. Create a money input field with a label '$$$': Text input (Helvetica Neue, 14px, Slate Text #101010) with transparent background and a 1px solid Slate Text border only on top. Label '$$$' (Helvetica Neue, 14px, Midnight Ink #000000).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521661065-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521661065-thumb.jpg |
