# #standwithukraine — Refero Style

- Refero URL: https://styles.refero.design/style/6e91afd2-a3ce-4bd7-88ab-eea9e38f6af4
- Site URL: https://theothersideoftruth.com
- ID: 6e91afd2-a3ce-4bd7-88ab-eea9e38f6af4
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:46:19.136Z
- Ranks: newest: 524, popular: 910, trending: 822

> Stark Contrast, Urgent Resolve

## Description

The #standwithukraine design system conveys a sense of urgent, stark information delivery. It utilizes a striking contrast between dark backgrounds and vivid yellow accents, evoking the Ukrainian flag. Typography is dominant and forceful, often with wide letter-spacing, set against minimal UI elements. The overall aesthetic is raw and direct, prioritizing message over decorative flourishes, with a spacious, almost sparse layout that reinforces the gravity of the content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Freedom Yellow | #f6e54e | brand | Yellow accent for outlined action borders, linked labels, and lightweight interactive emphasis |
| Sky Blue | #77afd8 | brand | Background for specific hero sections and decorative graphical elements. Represents a secondary, softer component of the national colors, providing a visual counterpoint to the dominant dark theme |
| Deep Night | #202020 | neutral | Predominant background for canvas and card surfaces, primary text color for headings and body text, and border color for UI elements. Establishes the somber, impactful tone of the site |
| Ghost White | #ffffff | neutral | Secondary text color for content that needs to stand out against dark backgrounds, such as card headers or important statements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica Neue Cyr | Arial | 400, 700 | 12px, 16px, 20px, 28px, 72px, 80px, 168px | 0.86, 1.12, 1.15, 1.20 | Primary typeface for all headings, body text, navigation, and interactive elements. Its strong, sans-serif character supports the site's direct and urgent messaging. |
| Nitti-Normal | Menlo | 400 | 12px | 1.12 | Used for code snippets and specific data entries where a more monospace, functional presentation is desired for clarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.12 | 0.24 |
| body | 16 | 1.15 |  |
| subheading | 20 | 1.15 |  |
| heading | 28 | 1.15 |  |
| heading-lg | 72 | 0.86 | -0.96 |
| display | 168 | 0.86 | 79 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "20px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Outlined CTA Button

**Role:** Primary call to action.

Transparent background with a 4px `Freedom Yellow` border and `Freedom Yellow` text. Padding is 4px on all sides, with 0px border-radius. One variant has a `20px` border-radius.

### Neutral Outlined Button

**Role:** Secondary call to action.

Transparent background with a 4px `Deep Night` border and `Deep Night` text. Padding is 4px on all sides, with 0px border-radius.

### Navigation Link

**Role:** Primary site navigation.

Text in `Deep Night` or `Freedom Yellow` without explicit borders or background. Appears with 24px vertical padding and varied horizontal spacing.

### Info Badge

**Role:** Informational highlight.

Background in `Deep Night` with `Deep Night` text, 0px border-radius and 0px padding. Sometimes appears with 16px padding and transparent background.

### Text Card

**Role:** Container for content sections.

Transparent background, no shadow, 0px border-radius, and 0px internal padding. Uses `Deep Night` or `Ghost White` as text color depending on contrast needs.

## Do's

- Prioritize text content readability by using `Deep Night` (#202020) for most text against neutral backgrounds, and `Ghost White` (#ffffff) against `Deep Night` backgrounds.
- Use `Freedom Yellow` (#f6e54e) exclusively for primary interactive elements (outlined buttons, links) and key informational accents to maintain its impact.
- Maintain a spacious layout with `32px` vertical gaps between major sections and `8px` between smaller elements.
- Apply `0px` border-radius for general UI components like cards and text containers, reserving `20px` for specific button variants.
- Employ the Helvetica Neue Cyr font family for all primary text, leveraging its bold weights for headings and wider letter-spacing for dramatic effect.
- Use transparent backgrounds and `Freedom Yellow` (#f6e54e) borders for call-to-action buttons, avoiding solid fills to maintain a lightweight, urgent feel.
- Feature large, impactful headlines (72px or 168px) with tight line heights and significant negative letter-spacing for a sculptural, authoritative presence.

## Don'ts

- Do not introduce new saturated accent colors beyond `Freedom Yellow` (#f6e54e) and `Sky Blue` (#77afd8) to preserve the stark brand identity.
- Avoid solid background fills for interactive buttons; use the outlined style with `Freedom Yellow` (#f6e54e) to signify interactivity.
- Do not use subtle elevation or shadows on card components; maintain a flat aesthetic for content containers.
- Refrain from using decorative gradients or complex visual textures, as the system relies on stark contrasts and direct presentation.
- Do not use generic system fonts; stick to Helvetica Neue Cyr and Nitti-Normal to uphold the unique typographic voice.
- Avoid dense information blocks; use generous spacing and clear divisions to ensure content is easily digestible.
- Do not dilute the contrast by placing light text on `Sky Blue` (#77afd8) backgrounds, as the contrast ratio is insufficient (`2.4:1`).

## Layout

The page exhibits a full-bleed layout contrasting with sections restricted by a max-width, suggesting a hybrid model that maximizes impact for key sections while containing detailed content. The hero section leverages a full-viewport gradient background with centered, large-scale typographic elements. Sections typically stack vertically with consistent `32px` gaps, utilizing alternating color bands (dark canvas, yellow accents). Content is often arranged in centered stacks or simple text blocks, with a notable absence of complex grid structures for features, instead relying on clear hierarchical typography. Navigation is via a fixed top bar and a prominent vertical side navigation, both minimalistic.

## Imagery

The site predominantly uses abstract, large-scale typography and graphic elements over traditional imagery. When present, images appear as background elements or within cards, treated with a stark, often monochromatic filter that aligns with the overall somber mood. Icons are minimal, outlined, and monochromatic, primarily serving functional navigation. The visual density is image-light, focusing on text as the primary informational and emotional carrier.

## Similar Brands

| Business | Why |
| --- | --- |
| Amnesty International | Similar use of dark backgrounds with striking, single-color accents to convey serious, urgent messaging. |
| The New York Times (digital edition) | Emphasis on strong typography and a clear, minimal visual hierarchy to prioritize information delivery in a stark manner. |
| The Intercept | Uses a similar confrontational and direct aesthetic, with strong typefaces and high contrast for impactful storytelling. |
| WIRED (older designs) | Features bold, impactful typography as primary visual elements, often with exaggerated letter-spacing, similar to the large 'UKR' text. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #202020
background: #202020
border: #202020
accent: #f6e54e
primary action: #f6e54e (outlined action border)

Example Component Prompts:
1. Create a hero section: Full-bleed `Sky Blue` (#77afd8) background for the top. Centered headline 'A MOMENT OF TRUTH' in Helvetica Neue Cyr bold, `Ghost White` (#ffffff), 72px size, 0.86 line-height, -0.96px letter-spacing. Subheading 'RUSSIA-UKRAINE WAR' in Helvetica Neue Cyr regular, `Ghost White` (#ffffff), 28px size, 1.15 line-height.
2. Create an Outlined Primary Action: Transparent background, #f6e54e border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
3. Create a navigation item: `/beginning` text in Helvetica Neue Cyr regular, `Freedom Yellow` (#f6e45e), 16px size, 24px vertical padding. Transparent background, no border.
4. Create a text card for statistics: `Deep Night` (#202020) background. 'UKRAINE ARMY' heading in Helvetica Neue Cyr bold, `Ghost White` (#ffffff), 28px size, 1.15 line-height. Body text 'IBAK:' in Nitti-Normal regular, `Ghost White` (#ffffff), 12px size, 1.12 line-height. Card has 0px radius and 0px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513540418-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513540418-thumb.jpg |
