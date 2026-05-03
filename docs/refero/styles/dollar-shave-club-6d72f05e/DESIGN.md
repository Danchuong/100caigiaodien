# Dollar Shave Club — Refero Style

- Refero URL: https://styles.refero.design/style/6d72f05e-dce6-43ad-9532-f61bf211ed46
- Site URL: https://www.dollarshaveclub.com
- ID: 6d72f05e-dce6-43ad-9532-f61bf211ed46
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T01:04:00.843Z
- Ranks: newest: 634, popular: 896, trending: 740

> Bold utility, clear guidance

## Description

Dollar Shave Club presents a bold, product-focused aesthetic built on a deep blue foundation. Vibrant brand colors like orange and maroon punctuate the interface, guiding attention to key actions and brand messaging, while a tightly defined typographic system ensures strong hierarchy. Components are direct and confident, featuring slight corner rounding and minimal elevation, allowing the strong color palette and product imagery to drive the visual experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Blue | #142978 | brand | Primary background, prominent text, card elements |
| Mahogany Red | #82163f | brand | Accent for navigation states and specific content blocks |
| Action Orange | #fe5000 | brand | Primary call-to-action buttons, interactive highlights |
| Deep Space Blue | #0a153c | brand | Darker background variations, subtle interactive states |
| Crisp White | #ffffff | neutral | Primary text, button text, crisp borders, page elements |
| Slate Gray | #404040 | neutral | Secondary text, dark internal borders, neutral button elements |
| Powder Blue | #dbebf5 | neutral | Background for information cards, subtle surface contrasts |
| Warm Cream | #f5ecdf | neutral | Subtle background accents or section dividers |
| Light Gray | #eeeeee | neutral | Subtle borders, background accents for imagery |
| Platinum Gray | #e3e3e3 | neutral | Divider lines, badge borders |
| Ash Gray | #949596 | neutral | Input borders, placeholder text |
| Ink Black | #000000 | neutral | Heavy borders, strong outlines, occasional text |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| DSC Specter | Montserrat, Open Sans | 400, 600, 700, 800, 900 | 12px, 14px, 15px, 16px, 18px, 20px, 24px, 32px, 40px, 52px | 0.80, 1.00, 1.19, 1.20, 1.25, 1.29, 1.30, 1.33, 1.36, 1.50, 1.57, 1.80, 1.86 | Primary brand typeface for all headings, body text, buttons, and UI elements. Its strong, condensed character is key to the brand's direct and confident voice. |
| Gelica | Roboto, Lato | 400, 700, 800 | 12px, 14px, 16px | 1.20, 1.40, 1.50, 1.80 | Secondary typeface for navigation, input fields, and some body text, providing a complementary, slightly wider feel; particularly for all-caps navigation items to ensure legibility. |
| GTStandard-M |  | 400 | 16px | 1.5 | GTStandard-M — detected in extracted data but not described by AI |
| Font Awesome 5 Pro |  | 300 | 18px | 1 | Font Awesome 5 Pro — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.528 |
| body | 14 | 1.57 | 0.602 |
| body-lg | 16 | 1.5 | 0.608 |
| subheading | 18 | 1.29 | 0.594 |
| heading | 24 | 1.25 | 0.6 |
| heading-lg | 32 | 1.2 | 0.48 |
| display | 52 | 0.8 | -0.312 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4px",
    "buttons": "5px 10px",
    "default": "4px"
  },
  "elementGap": "10px",
  "sectionGap": "30px",
  "cardPadding": "25px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action

Filled with Action Orange (#fe5000), white text (#ffffff), 5px border-radius, 10px vertical and 20px horizontal padding. A more prominent variant uses 15px vertical and 80px horizontal padding and 4px radius.

### Ghost Button

**Role:** Secondary action that needs less emphasis

Transparent background, Slate Gray (#404040) text and border, no border-radius (0px), 0px padding. Used for subtle interactions like 'Add' or within navigation.

### Navigation Button

**Role:** Top-level navigation items

Deep Space Blue (#0a153c) background, white text (#ffffff), 4px border-radius, 2px vertical and 7px horizontal padding. Used for the segmented 'Men's' / 'Women's' navigation.

### Information Card (Powder Blue)

**Role:** Presenting product features or bundles

Powder Blue (#dbebf5) background, 0px border-radius, 25px padding on all sides, no shadow. Content within uses Midnight Blue (#142978) for primary text.

### Plain Card (Transparent)

**Role:** Flexible content container without visual emphasis

Transparent background, 0px border-radius, 0px padding, no shadow. Adaptable for various content blocks like product listings.

### Text Input (Transparent)

**Role:** Form fields without a distinct background

Transparent background, Slate Gray (#404040) text, no border-radius, 0px padding, a light subtle border in #404040 with 8% opacity. Used for search inputs.

### Text Input (White Background)

**Role:** Standard form input fields

White background (#ffffff), Slate Gray (#404040) text, 4px border-radius, 10px vertical and 40px horizontal padding. Prominently used for search.

### Badge (White)

**Role:** Small informational tags

White background (#ffffff), Slate Gray (#404040) text, 4px border-radius, 10px padding, 4px right margin. Often used with icon for count.

### Badge (Platinum Border)

**Role:** Indicating quantity or status

Transparent background, Platinum Gray (#e3e3e3) border, 4px border-radius. Padding and text color typically inherited from context.

## Do's

- Use Midnight Blue (#142978) as the primary background for content sections to maintain visual depth and brand consistency.
- Apply Action Orange (#fe5000) exclusively for primary calls-to-action and critical interactive elements.
- Prioritize DSC Specter for all headings and body text, varying weights (400-900) to establish clear typographic hierarchy.
- Ensure all buttons use a border-radius of either 5px or 4px for a consistent, subtle softness.
- Maintain a clear elementGap of 10px between inline interactive elements and form fields.
- Utilize Mahogany Red (#82163f) sparingly, primarily for navigation highlights or specific brand messages.
- Leverage Powder Blue (#dbebf5) for card backgrounds to visually differentiate information blocks without adding visual weight.

## Don'ts

- Do not use generic gray tones for button backgrounds; all functional buttons should adopt Action Orange (#fe5000) or Deep Space Blue (#0a153c) for variant actions.
- Avoid excessive use of shadows; most components should remain flat to emphasize the bold color palette.
- Do not introduce new font families; adhere strictly to DSC Specter and Gelica for all text.
- Refrain from using Crisp White (#ffffff) as a primary background for large sections unless it's a dedicated hero or a very light content spot contrasting a dark dominant mode.
- Do not deviate from the established spacing scale; maintain 10px for element gaps and 25px for card padding to keep a comfortable density.
- Never use achromatic blacks or dark grays for primary text on dark backgrounds; always use Crisp White (#ffffff) for readability.
- Avoid outlining primary action buttons; the design system strongly favors filled Action Orange (#fe5000) for emphasis.

## Layout

The page primarily uses a full-bleed layout for background colors, creating distinct horizontal sections. Content within these sections is often centered within an implied max-width container, especially for headings and feature blocks. The hero section is a split layout: a commanding headline and call-to-action on the left, set against a predominantly white or light background, paired with a dynamic lifestyle image on the right which can be deeply saturated with brand colors. Subsequent sections alternate between Midnight Blue and brighter card backgrounds, often utilizing a 4-column grid for product features or a 3-column grid for 'How It Works' style content. Navigation is a sticky top bar with clearly segmented 'Men's' and 'Women's' options, reinforced by a secondary navigation for product categories.

## Imagery

This site features a mix of product photography and stylized lifestyle imagery. Product shots are typically tight crops, often on solid backgrounds (Powder Blue or white), showcasing the items clearly rather than in use. Lifestyle images, when present, tend to be candid and dynamic, with warm lighting and a slightly desaturated color treatment, aiming for authenticity. Illustrations are abstract and organic, using brand colors like Action Orange and a pastel purple for decorative flair. Icons are outlined, with a moderate stroke weight, and primarily use Action Orange or Crisp White, contrasting against the dark backgrounds. Imagery density is moderate, used to break up text sections and highlight product benefits.

## Similar Brands

| Business | Why |
| --- | --- |
| Harry's | Clear, direct product focus with a bright, contrasting accent color against a more muted or neutral base. |
| Manscaped | Bold, masculine color palette with strong visual hierarchy and a direct call-to-action focus in e-commerce. |
| Away (luggage) | Product-heavy photography style, strong brand color usage for accents, and clean, legible typography for e-commerce. |
| Native (deodorant) | Emphasis on product imagery, clean layouts, and functional use of vibrant brand colors populating a white or light background. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #142978
border: #404040
accent: #82163f
primary action: #fe5000 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #fe5000 background, #404040 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a navigation link: background transparent. Text 'Razors & Blades' using DSC Specter weight 600, size 16px, #ffffff. On hover, use Mahogany Red (#82163f) for the background with 4px radius and 13px right margin.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511005352-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777511005352-thumb.jpg |
