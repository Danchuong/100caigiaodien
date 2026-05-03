# Jasper — Refero Style

- Refero URL: https://styles.refero.design/style/02a9c799-eb91-425b-8d68-3776b5e84229
- Site URL: https://jasper.ai
- ID: 02a9c799-eb91-425b-8d68-3776b5e84229
- Theme: light
- Industry: ai
- Created: 2026-03-08T11:33:23.000Z
- Ranks: newest: 1076, popular: 332, trending: 651

> Marketing billboard meets data dashboard. Bold headlines and vibrant accents punctuate a clean, analytical canvas.

## Description

This design system projects a direct and dynamic brand presence, blending professional typographic rigor with an energetic, multi-hued accent palette. The contrast of an authoritative, custom serif paired with a clean sans-serif creates a distinct voice. A core `Jasper Indigo` (#00063d) dominates text, while `Jasper Flame` (#fa4028) acts as a high-energy call-to-action color, injecting urgency and vibrancy. The minimal use of rounded corners and strong visual separation of elements underscore a no-nonsense, results-oriented aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #FFFFFF | neutral | Page backgrounds, default text for dark elements |
| Smoke Gray | #F9F9F9 | neutral | Card backgrounds, subtle dividing lines |
| Graphite | #5E5D5F | neutral | Secondary text, icons, borders in illustrations |
| Jasper Indigo | #00063D | brand | Primary text, headings, main interactive elements — establishes brand authority |
| Jasper Flame | #FA4028 | brand | Primary CTA buttons, prominent interactive accents — a vivid, urgent signal. |
| System Red | #FA7560 | semantic | Error states, negative indicators. |
| System Green | #103A00 | semantic | Success messages, positive indicators, 'New Research' labels. |
| Research Green | #E6FFD9 | accent | Background for 'New Research' banner, light success contexts. |
| Highlight Blue | #0095FF | accent | Used within illustrations and subtle accent backgrounds. |
| Highlight Pink | #5A003C | accent | Used within illustrations and subtle accent backgrounds. |
| Highlight Yellow | #FFF67D | accent | Subtle accent backgrounds, warning indicators. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Feature | Georgia | 450 | 20px, 24px, 28px, 38px, 54px, 80px | 1.00, 1.05, 1.10 | Headlines and display text. Its strong serifs and dynamic letter spacing command attention, conveying authority and sophistication. |
| ABC ROM | Graphik | 450, 500, 700 | 14px, 16px, 18px, 28px | 1.00, 1.20, 1.40 | Body copy, links, navigation, and button text primarily. Its clean, modern sans-serif nature ensures high legibility across all content, and tight letter spacing at smaller sizes aids compactness. |
| ABC ROM Mono | DM Mono | 450 | 14px, 16px | 1.00, 1.20, 1.40 | Used for specialized text elements like code snippets or data points where a monospaced aesthetic is desired, creating a technical yet approachable feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 | -0.14 |
| body | 16 | 1.4 | -0.16 |
| subheading | 18 | 1.4 | -0.18 |
| heading-sm | 20 | 1.1 | -0.6 |
| heading | 24 | 1.1 | -0.72 |
| heading-lg | 28 | 1.1 | -0.84 |
| display | 38 | 1.05 | -1.14 |
| display-lg | 54 | 1.05 | -1.62 |
| display-xl | 80 | 1 | -2.4 |

## Spacing & Shape

```json
{
  "radius": {
    "badge": "4px",
    "default": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Announcement Banner + CTA Buttons



### Platform Section Block



### Metric Stat Card



### Primary CTA Button

**Role:** Call to action

Filled button with `Jasper Flame` (#FA4028) background and `Canvas White` (#FFFFFF) text. No border-radius, `16px` vertical, `20px` horizontal padding. No visible border.

### Secondary CTA Button

**Role:** Secondary call to action

Ghost button with transparent background and `Jasper Indigo` (#00063d) text. No border-radius, no padding beyond text boundaries. No visible border.

### Navigation Link

**Role:** Top navigation

Transparent background, `Jasper Indigo` (#00063d) text. No border-radius or explicit padding, relies on text sizing and inherent link spacing.

### Feature Card

**Role:** Informational display

`Smoke Gray` (#F9F9F9) background, `0px` border-radius. Padding of `12px` on all sides. No box-shadow.

### Illustrative Background Card

**Role:** Thematic content block

Transparent background, `0px` border-radius. `12px` horizontal padding. Used for wrapping content that includes unique background illustrations.

### New Research Badge

**Role:** Highlighting new content

`Research Green` (#E6FFD9) background, `System Green` (#103A00) text. `4px` border-radius. `6px` padding.

### Dark Badge

**Role:** Informational tag

`Jasper Indigo` (#00063d) background, `Canvas White` (#FFFFFF) text. `0px` border-radius. `8px` padding.

### Light Badge

**Role:** Informational tag

`Canvas White` (#FFFFFF) background, `Jasper Indigo` (#00063d) text. `0px` border-radius. `8px` padding.

## Do's

- Use `Feature` font with `Jasper Indigo` (#00063d) for all primary headlines to establish an authoritative tone.
- Apply `Jasper Flame` (#FA4028) exclusively for primary call-to-action buttons to ensure maximum visual urgency.
- Maintain `0px` border-radius across all components unless explicitly defined as `4px` for badges, reinforcing a sharp, precise aesthetic.
- Employ `12px` as the base horizontal padding for card-like elements, creating consistent internal spacing.
- Utilize `Smoke Gray` (#F9F9F9) for subtle content separation, such as card backgrounds, to maintain visual lightness.
- Implement the `-0.0100em` letter-spacing for `ABC ROM` body copy at all sizes, contributing to a controlled, dense text appearance.

## Don'ts

- Do not introduce rounded corners on primary elements like buttons or cards; maintain the `0px` border-radius for brand consistency.
- Avoid using `System Red` (#FA7560) or `System Green` (#103A00) for general interactive elements; reserve them for semantic feedback like error or success.
- Do not use box-shadows on cards or UI elements; rely on background color changes for perceived depth.
- Do not deviate from the `Feature` font's specific letter-spacing values for headlines; these are critical for its distinctive look.
- Avoid arbitrary color accents; restrict accent colors to the defined palette of `Highlight Blue`, `Pink`, and `Yellow` within illustrations or specific features.
- Do not add extra padding to navigation links beyond their natural content box; they should appear lean and integrated.

## Layout

The page primarily uses a `max-width` contained layout, centered on a `Canvas White` background, creating a spacious and structured feel. The hero section is a full-width experience with a centered headline and CTA buttons against a background of abstract, brand-colored vector illustrations. Sections alternate between purely text-based content and those featuring large, conceptual illustrations or product screenshots. Content arrangement frequently uses two-column layouts, often with text on one side and a prominent visual on the other, or a `3-column card grid` for feature showcases. Vertical spacing between major sections is generous, around `32px`, providing ample breathing room. The navigation is a sticky top bar with a logo and distinct calls to action on the right.

## Imagery

The site's visual language is dominated by playful, technical illustrations and product screenshots. Illustrations employ a mix of geometric and organic shapes, outlined in `Graphite` (#5E5D5F) and filled with bright, brand-specific accent colors (`Research Green`, `Highlight Blue`, `Highlight Pink`, `Highlight Yellow`). These are often presented on transparent card backgrounds, allowing the section's background to show through. Photography is limited to candid, high-key images of smiling diverse individuals, used specifically for testimonials or team members. Icons are outlined, mono-color, and use a consistent stroke weight, typically in `Graphite` or `Jasper Indigo`. Imagery serves to explain complex AI workflows in an engaging way and to humanize the technology, acting as both decorative and explanatory content, occupying significant visual space relative to text.

## Similar Brands

| Business | Why |
| --- | --- |
| Zapier | Similar approach to using playful, conceptual illustrations to explain complex software, clean layouts, and a vibrant primary accent color for CTAs. |
| Ahrefs | Utilizes a clean, high-contrast typography-driven aesthetic with clear functional buttons and a focus on product value over excessive visual flair. |
| Copy.ai | Shares a contemporary, marketing-focused SaaS visual identity with strong typography and a clear, actionable brand color. |
| Figma | Employs bold headlines, a clean white canvas, and a strategic use of color within illustrations to convey innovation and capability, similar to Jasper's use of accent colors. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `Jasper Indigo` (#00063D)
- Background: `Canvas White` (#FFFFFF)
- CTA Primary: `Jasper Flame` (#FA4028)
- Button Text (Primary): `Canvas White` (#FFFFFF)
- Card Background: `Smoke Gray` (#F9F9F9)
- Accent (Research): `Research Green` (#E6FFD9)

### 3-5 Example Component Prompts
1. **Create a primary call-to-action button:** "Primary CTA Button: text 'Get A Demo', `Jasper Flame` (#FA4028) background, `Canvas White` (#FFFFFF) text, `16px 20px` padding, `0px` radius. Use `ABC ROM` font, weight `450` at `16px` with `1.4` lineHeight and `-0.0100em` letter-spacing."
2. **Generate a headline for a section:** "Headline: text 'Why modern marketing teams choose Jasper', `Jasper Indigo` (#00063D) color. Use `Feature` font, weight `450` at `54px`, `1.05` lineHeight, and `-0.0200em` letter-spacing."
3. **Design a content card within a feature grid:** "Feature Card: `Smoke Gray` (#F9F9F9) background, `12px` padding, `0px` radius. Add a title using `ABC ROM` font, weight `500` at `18px`, `Jasper Indigo` (#00063D). Include body text using `ABC ROM` font, weight `450` at `16px`, `Graphite` (#5E5D5F)."
4. **Create a 'New Research' badge:** "New Research Badge: text 'New research!', `Research Green` (#E6FFD9) background, `System Green` (#103A00) text, `4px` radius, `6px` padding. Use `ABC ROM Mono` font, weight `450` at `14px`, `1.4` lineHeight, and `-0.0100em` letter-spacing."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932588729-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932588729-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/02a9c799-eb91-425b-8d68-3776b5e84229-1777561077197-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/02a9c799-eb91-425b-8d68-3776b5e84229-1777561077197-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/02a9c799-eb91-425b-8d68-3776b5e84229-1777561077197-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/02a9c799-eb91-425b-8d68-3776b5e84229-1777561077197-preview-detail-poster.jpg |
