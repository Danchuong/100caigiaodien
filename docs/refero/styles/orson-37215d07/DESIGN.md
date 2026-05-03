# Orson — Refero Style

- Refero URL: https://styles.refero.design/style/37215d07-9e4e-4cef-ad58-65d111caba19
- Site URL: https://orson.ai
- ID: 37215d07-9e4e-4cef-ad58-65d111caba19
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:35:22.335Z
- Ranks: newest: 120, popular: 374, trending: 265

> Warm parchment elegance.

## Description

Orson uses an academic-editorial design language, combining classic serif typography with subtle, sophisticated color gradients. The system emphasizes generous white space and a calming, almost analog, background tone. Interactions are minimal and text-focused, with outlines and understated hovers. The visual identity exudes trusted authority through a restrained palette and mature typographic choices, avoiding bold or high-contrast elements for actions.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Parchment | #f0ebdd | neutral | Page backgrounds, large content sections, subtle surface elevation |
| Inkwell | #302f2c | neutral | Primary text, headings, accent borders, and semantic UI elements for structure and emphasis |
| Activated Black | #000000 | neutral | Strongest text contrast, button text and borders when a precise contrast is needed |
| Sunbeam Gradient | #ffb801 | accent | Decorative background gradients, soft visual accents. The primary hue implies warmth and a gentle glow |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Big Daily Short | Playfair Display | 300, 400 | 16px, 22px, 36px, 42px, 64px, 86px | 1.00, 1.12, 1.25, 1.50 | Headlines, subheadings, and emphasized textual content. The custom font provides a sophisticated, almost editorial gravitas through its classic serif forms. Weight 300 for lead headlines feels light and refined, suggesting authority through understatement. |
| Basel Grotesk | Inter | 500 | 16px, 17px | 1.00, 1.41 | Body text, navigation, and detailed content. Its clean, sans-serif structure balances the serif headlines, ensuring readability for longer passages. |
| Arial | Arial | 400 | 13px | 1.20 | Small functional text, legal disclosures, and system-level button labels where maximum legibility and neutrality are required. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.2 |  |
| body | 16 | 1.41 |  |
| subheading | 22 | 1.25 |  |
| heading | 36 | 1.25 |  |
| heading-lg | 64 | 1.12 |  |
| display | 86 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "40px"
  },
  "elementGap": "12px",
  "sectionGap": "30px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Navigation links and secondary actions.

Text in Activated Black or Inkwell on a transparent background, with a 0px border-radius, 10px vertical padding, and 0px horizontal padding. Borders are not visible by default but appear on hover for subtle feedback.

### Navigation Link

**Role:** Primary navigation items.

Text in Inkwell (Big Daily Short, 16px) with 8px top/bottom padding and 9px left padding, 14px right padding. Applies a 40px border radius on hover/active states for a 'pill' shape.

### Implicit Badge

**Role:** Contextual labels or category indicators.

Text in Inkwell without any background or border. Used for discrete labeling, similar to inline text but carrying semantic meaning. No padding or border-radius.

## Do's

- Use Parchment (#f0ebdd) as the primary background color for all main content areas.
- Employ Inkwell (#302f2c) for primary text content and essential structural elements like borders.
- Apply Big Daily Short font at weight 300 for large headings and weight 400 for subheadings to maintain the editorial tone.
- Ensure navigation links have 8px vertical padding and 9px-14px horizontal padding, with a 40px border-radius upon interaction.
- Maintain a comfortable information density by using '12px' for element gaps and '30px' for section gaps.
- Integrate the Sunbeam Gradient into hero sections or subtle atmospheric backgrounds to add warmth and depth.
- Use radial-gradient(41.33% 41.33%, rgb(255, 199, 56) 0px, rgba(248, 233, 226, 0) 100%) for decorative background effects.

## Don'ts

- Avoid high-contrast, vivid colors for interactive elements; use the existing neutral palette with subtle activations.
- Do not introduce strong visual borders or shadows on cards or buttons; maintain a flat, uncluttered aesthetic.
- Do not deviate from the Big Daily Short and Basel Grotesk fonts for headlines and body text to preserve brand consistency.
- Do not use letter-spacing other than 'normal' for any type roles, as it's not present in the extracted data and would alter the typographic rhythm.
- Avoid heavy imagery or large visual elements that clash with the text-dominant, editorial aesthetic.
- Do not use generic system borders; all borders should be 1px solid with Inkwell (#302f2c) as the color.
- Avoid using any geometric shapes or sharp angles for interactive elements; prefer soft curves or ghost outlines.

## Layout

The page uses a maximum content width that is visually contained, often with generous horizontal margins, giving a sense of spaciousness. The hero section features a centered headline over a soft radial gradient, creating an immediate atmospheric impression. Content sections generally employ consistent vertical spacing, creating an even rhythm. The arrangement often features centered text blocks or occasionally multi-column layouts, particularly for feature descriptions below decorative line-art. Navigation is a minimalist top bar with a hamburger menu for expanded options, reflecting a focus on clear, uncluttered presentation rather than constant access to many links. The overall density is spacious, emphasizing readability and a calm user experience.

## Imagery

The visual language for imagery is minimal and functional. Photography, when present, is often contained within clear boundaries, focusing on human subjects or concepts relevant to professional settings. There are abstract, geometric line-art illustrations used as decorative elements, typically rendered in outline form with a strong visual connection to the brand's Inkwell color. Icons are simple, outlined, and monochromatic, used sparingly for navigation or conceptual representation. The density is text-dominant, with imagery serving as an atmospheric or explanatory complement rather than the primary focus, aiming for a refined, almost academic aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Similar classic serif typography combined with sophisticated use of neutrals and generous white space for an editorial feel. |
| The New York Times | Shared emphasis on classic, authoritative typography and a restrained color palette, prioritizing content legibility and an academic tone. |
| Future Fonts | Similar focus on unique, high-quality typography as a core brand element, paired with sparse, elegant design. |
| The Information | Uses a light, parchment-like background with dark, traditional typography for a serious, content-focused feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #302f2c
background: #f0ebdd
border: #302f2c
accent: #ffb801
primary action: no distinct CTA color

Example Component Prompts:
Create a hero section: Parchment background with an overlay of radial-gradient(41.33% 41.33%, rgb(255, 199, 56) 0px, rgba(248, 233, 226, 0) 100%). Headline 'Building Trust' using Big Daily Short, weight 64px, lineHeight 1.12, Inkwell color.
Create a navigation link: Text 'Our Mission' using Basel Grotesk, 16px, weight 500, Inkwell color. Apply 8px top/bottom padding, 9px left padding, 14px right padding. On hover, apply a 40px border-radius with a 1px solid Inkwell border.
Create a body text paragraph: Content 'Whether executives are steering through...' using Basel Grotesk, 16px, weight 500, Inkwell color, 1.41 lineHeight, 12px right margin.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520106744-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520106744-thumb.jpg |
