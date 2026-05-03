# Worth Agency — Refero Style

- Refero URL: https://styles.refero.design/style/906ef782-4be7-45ee-9800-0514d46e7518
- Site URL: https://worth.agency
- ID: 906ef782-4be7-45ee-9800-0514d46e7518
- Theme: light
- Industry: agency
- Created: 2026-04-30T02:05:16.126Z
- Ranks: newest: 448, popular: 427, trending: 278

> Vibrant canvas, bold statements.

## Description

Worth Agency employs a vibrant, confident design language using bold typography and a limited, high-contrast color palette. Dominant bright surfaces are punctuated by a vivid orange-red for headings and accent elements, creating an energetic yet clean feel. Components are light, with subtle bordering and pronounced roundness, allowing the strong typography and accent colors to define the brand's presence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page and card backgrounds, primary container surfaces |
| Whisper Gray | #f9f9f9 | neutral | Subtle background for UI elements, very light surface differentiation |
| Midnight Text | #282828 | neutral | Primary body text, default icon color, and content borders. Provides strong contrast against light backgrounds |
| Pitch Black | #000000 | neutral | Link text, strong borders, and some icon elements. Used for maximum contrast |
| Blush Pink | #f8d4d4 | accent | Prominent background sections, button and link borders, decorative fills |
| Zest Orange | #eb4726 | brand | Primary heading color, icon fills, and accent borders. Creates a focal point |
| Muted Sage | #d2fdd1 | accent | Background for specific cards or sections, adding a subtle visual break |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| -apple-system | system-ui | 400 | 16px | 1.00 | System fallback for general text, ensures platform consistency when custom fonts are unavailable. |
| custom_47163 | Poppins, Montserrat | 400, 500, 600 | 16px, 22px, 28px, 42px, 52px | 1.00, 1.14, 1.27, 1.29, 1.31, 1.33, 1.44, 1.45, 1.50, 2.50 | Primary typeface for body text, links, and most headings. Its varied weights support a subtle hierarchy while maintaining brand voice. |
| custom_47178 | Bebas Neue, Impact | 400 | 400px | 0.75 | Display font for hero sections and large impactful headlines. Its extreme size and tight letter spacing deliver a bold, artistic statement. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1 | 0.096 |
| subheading | 22 | 1 | 0.132 |
| heading | 28 | 1.14 | 0.168 |
| heading-lg | 42 | 1.27 | 0.252 |
| display | 400 | 0.75 | -4.4 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "large": "30px",
    "small": "12px",
    "default": "20px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Heading Display

**Role:** Large, eye-catching text for hero sections.

Uses 'custom_47178' at 400px, weight 400, color 'Zest Orange' (#eb4726), with a line height of 0.75 and letter spacing of -0.0110em.

### Body Text

**Role:** Standard paragraph text.

Uses 'custom_47163' at 16px, weight 400, color 'Midnight Text' (#282828), with a line height of 1.0 and letter spacing of -0.0060em.

### Accent Link

**Role:** Interactive text links for navigation and calls to action.

Uses 'custom_47163' at 16px, weight 400, color 'Zest Orange' (#eb4726), with a line height of 1.0, letter spacing of -0.0060em, and a 1px 'Blush Pink' (#f8d4d4) border on active/hover states.

### Navigation Tag

**Role:** Small, rounded tags for categorical navigation or labels.

Background 'Canvas White' (#ffffff), text 'Pitch Black' (#000000), border 1px solid 'Pitch Black' (#000000), 20px border-radius, with minimal padding.

### Content Card - Default White

**Role:** Standard content containers for features or portfolio items.

Background 'Canvas White' (#ffffff), 16px border-radius, no box shadow, 0px padding. Content elements within use 'Midnight Text' (#282828).

### Content Card - Muted Sage

**Role:** Alternative content container for visual variation.

Background 'Muted Sage' (#d2fdd1), 16px border-radius, no box shadow, 0px padding. Content elements within use 'Midnight Text' (#282828).

### Ghost Button - Scroll

**Role:** Subtle call-to-action to guide users down the page.

Text 'Zest Orange' (#eb4726) for link text, centered, with a light 1px 'Blush Pink' (#f8d4d4) border below the text, implicitly indicating a scroll action. Uses 'custom_47163' at 22px, weight 400.

## Do's

- Prioritize 'Zest Orange' (#eb4726) for all primary headings to establish immediate visual hierarchy.
- Use 'Canvas White' (#ffffff) as the dominant background color for most sections, ensuring generous negative space.
- Apply 'Midnight Text' (#282828) for all body text for clear readability against light backgrounds.
- Maintain a clear visual distinction between text and background with a minimum contrast ratio of 14.7:1 (e.g. 'Midnight Text' on 'Canvas White').
- Employ a 16px border-radius for all card-like containers, providing a consistent soft aesthetic.
- Use bold, large typography from 'custom_47178' (400px) and 'custom_47163' (52px) for impactful statements in hero and key headings.
- Accentuate interactive elements like links and subtle ghost buttons with 'Blush Pink' (#f8d4d4) borders.

## Don'ts

- Avoid using multiple chromatic colors in close proximity; the palette should remain focused on 'Zest Orange' and 'Blush Pink' as accents.
- Do not introduce strong shadows or complex gradients; rely on color and typography for emphasis.
- Refrain from drastically altering font sizes or weights outside the defined type scale to maintain typographic rhythm.
- Do not use dark backgrounds for large content blocks; the system is designed around a light-mode aesthetic.
- Avoid using radii smaller than 12px for interactive elements or 16px for cards, as this conflicts with the rounded visual identity.
- Do not rely on small text sizes for critical information; prioritize readability with defined body text sizes.
- Avoid generic system-default blue for links; use 'Zest Orange' (#eb4726) or 'Pitch Black' (#000000) for all interactive text.

## Layout

The page primarily uses a full-bleed layout for hero sections, immediately engaging the user with a large, centered headline. Subsequent sections, while appearing full-width in background, contain content within an implied max-width, maintaining a clean, centered stack for text and visual elements. The section rhythm is primarily seamless, flowing without hard dividers, relying on background color changes for distinction, as seen with alternating white and blush pink sections. Navigation is minimal, often appearing as a small, rounded tag in the top right, discreetly placed to not distract from the main content. Density is moderate, with ample whitespace surrounding key elements, ensuring clarity of the bold statements.

## Imagery

This site features product-centric imagery with tight crops and no lifestyle context. The primary focus is on displaying the core subject, often text-based brand names or service offerings, acting as a direct product showcase. Icons are simple, filled, and primarily monochromatic with occasional 'Zest Orange' accents, serving to clarify actions or decorative elements rather than convey complex information. Imagery is sparse; the design is text-dominant, with large, bold typography and color choices defining the visual weight.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Strong emphasis on typography as a primary visual element, limited color palette with bold accents. |
| Pentagram | Minimalist design with confident use of large, impactful text and a clean, direct aesthetic. |
| Work & Co | Focus on high-contrast visuals, clean layouts, and functional use of color sparingly to highlight content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #282828
background: #ffffff
border: #f8d4d4
accent: #eb4726
primary action: #f8d4d4 (outlined action border)

Example Component Prompts:
1. Create a hero section: 'Blush Pink' (#f8d4d4) full-bleed background. Center the headline "Worth" using 'custom_47178' at 400px, weight 400, 'Zest Orange' (#eb4726), letter-spacing -4.4px. Below it, add a link "Scroll to Explore" in 'Zest Orange' (#eb4726) using 'custom_47163' at 22px, weight 400, with a 1px 'Blush Pink' (#f8d4d4) bottom border.
2. Create a content card for a feature: 'Muted Sage' (#d2fdd1) background, 16px radius. Place the headline "Merry Berry" using 'custom_47163' at 52px, weight 400, 'Zest Orange' (#eb4726), letter-spacing 0.312px. Below the headline, add body text "A coffee franchise with almost a decade of history." in 'Midnight Text' (#282828) using 'custom_47163' at 16px, weight 400, letter-spacing 0.096px.
3. Design a top-right navigation tag: 'Canvas White' (#ffffff) background, 1px 'Pitch Black' (#000000) border, 20px radius. Inside, place the text "Agency" in 'Pitch Black' (#000000) using 'custom_47163' at 16px, weight 400, letter-spacing 0.096px, and a '+' icon in 'Pitch Black' (#000000).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514683316-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514683316-thumb.jpg |
