# Brex — Refero Style

- Refero URL: https://styles.refero.design/style/b58d92f6-68a8-4358-8fc9-6ea58e6d483b
- Site URL: https://brex.com
- ID: b58d92f6-68a8-4358-8fc9-6ea58e6d483b
- Theme: light
- Industry: fintech
- Created: 2026-02-13T17:18:38.000Z
- Ranks: newest: 1189, popular: 288, trending: 323

> Precision engineered toolkit — crisp, organized, and focused on clarity.

## Description

Brex's design system evokes a sense of quiet authority and precision, like a finely engineered financial instrument. It relies on a high-contrast achromatic palette for clarity, punctuated by a single vibrant orange for critical actions. The interplay of strong typography, including a custom headline font, and a disciplined use of space, crafts an experience that feels both robust and approachable, grounding complex financial offerings in visual simplicity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000710 | neutral | Footer background, secondary dark surface, deep textual elements for high contrast. |
| Action Orange | #ff5900 | brand | Primary CTA buttons, active navigation indicators, key interactive elements — vibrant and unmistakable. |
| Primary Text | #000000 | neutral | Dominant text color for headlines and body copy across light backgrounds, ensuring maximum readability. |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, high-contrast text on dark backgrounds. |
| Dark Charcoal | #15191 | neutral | Prominent headings, main navigation text, input text — a slightly softer black for substantial text blocks. |
| Soft Gray | #f3f3f7 | neutral | Subtle background for sections, lightly elevated surfaces, distinguishing content blocks without harsh boundaries. |
| Muted Slate | #b9bbc6 | neutral | Subtle borders, disabled states, less prominent icons, and secondary informational text. |
| Cool Stone | #60646c | neutral | Secondary body text, descriptive labels, and less emphasized headings for softer visual hierarchy. |
| Ash Gray | #6f737b | neutral | Tertiary text, subtle button outlines, and placeholder text in inputs. |
| Silver Pine | #8b8d98 | neutral | Navigation text in inactive states, subtle dividers, and less emphasized textual elements. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 500, 600 | 10px, 12px, 13px, 14px, 16px, 20px, 24px, 36px, 48px, 72px | 1.00, 1.20, 1.21, 1.33, 1.43, 1.50, 1.57 | Primary UI font for all body text, navigation, buttons, and most headings. Its range of weights and optical adjustments ensure legibility across all scales, grounding the system in a familiar yet precise sans-serif. |
| Flecha | serif | 500 | 36px | 1.11 | Exclusive typeface for dominant headlines, used at 36px/500 weight. Flecha provides a distinctive, slightly condensed character that gives Brex a unique voice at key branding moments, signaling authority and modernity without common sans-serif neutrality. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0 |
| body | 14 | 1.5 | 0 |
| heading-sm | 20 | 1.2 | -0.4 |
| heading | 24 | 1.2 | -0.48 |
| heading-lg | 36 | 1.2 | -0.72 |
| display | 48 | 1.2 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "input": "0px",
    "buttons": "6px",
    "default": "6px",
    "navItem": "10px"
  },
  "elementGap": "8-16px",
  "sectionGap": "48px",
  "cardPadding": "24-32px",
  "pageMaxWidth": null
}
```

## Components

### Email Signup CTA Bar



### Feature Product Cards Row



### Cookie Consent Banner



### Primary Action Button

**Role:** Calls to action

Solid Action Orange background (#ff5900) with Paper White text (#ffffff), 8px border-radius, 16px horizontal padding. Deliberately no top/bottom padding defined, implying height is externally set or flexible.

### Navigation Link Button

**Role:** Header navigation

Transparent background (rgba(0,0,0,0)), Dark Charcoal text (#15191e), 6px border-radius, 4px vertical padding and 8px horizontal padding. A subtle container for navigation items.

### Ghost Button

**Role:** Secondary actions, text-heavy links

Transparent background (rgba(0,0,0,0)) with Primary Text (#000000), no border-radius or padding. Used for minimal, text-dominant interactive elements without a clear container.

### Pill Navigation Tag

**Role:** Category filters, secondary navigation

Transparent background (rgba(0,0,0,0)) with Ash Gray text (#6f737b) and a matching 1px border. Rounded corners at 10px, with 0px vertical padding and 8px horizontal padding, creating a distinct pill shape for non-primary navigation.

### Text Input (Underlined)

**Role:** Form fields

Transparent background (rgba(0,0,0,0)) with Dark Charcoal text (#15191e). Features a bottom border of matching #15191, and 8px vertical padding with 2px horizontal padding, implying an input that highlights its data entry field directly.

## Do's

- Always use Action Orange (#ff5900) for primary call-to-action buttons, never fordecorative elements.
- Apply Soft Gray (#f3f3f7) as a background to differentiate content sections without introducing strong color.
- Employ the Flecha typeface (36px, 500 weight) exclusively for main page headlines to maintain brand distinction.
- Utilize Inter for all body text and UI labels, ensuring legibility and consistency across components.
- Maintain a clear visual hierarchy with Dark Charcoal (#15191e) for prominent text and Cool Stone (#60646c) for supporting details.
- Ensure all interactive elements have sufficient padding; a minimum of 4px vertical and 8px horizontal for small buttons, scaling up to 16px horizontal for primary CTAs.

## Don'ts

- Do not use any additional chromatic colors beyond Action Orange (#ff5900); stick to the defined neutral palette.
- Avoid arbitrary border-radius values; adhere to 6px, 8px, or 12px for components, and 0px for inputs.
- Do not use Flecha for any body text or minor headings; its distinctiveness is reserved for key messaging.
- Never use shadows on buttons or cards unless explicitly defined as part of a component style.
- Do not introduce tight letter-spacing for body text; apply negative letter-spacing only to large display typography as specified for Inter.

## Layout

The layout is predominantly a max-width contained structure, with content centered within the viewport. The hero section often features a split layout with prominent headlines and calls to action on the left, balanced by a significant product visual on the right. Below the hero, sections alternate between Paper White backgrounds and subtle Soft Gray (#f3f3f7) bands, creating a gentle vertical rhythm. Content is arranged in flexible grids, often with two or three columns for feature lists and information blocks, utilizing left-aligned text beside accompanying visuals. The navigation is a standard top-bar, fixed header with clear product and resource categorization, emphasizing direct access. Overall density is comfortable, with generous padding around content blocks preventing a cramped feel and enhancing readability.

## Imagery

The visual language focuses on sophisticated, desaturated product photography and clean UI mockups. Images are typically contained within rectangular frames, sometimes with a subtle 12px border-radius, and are frequently masked into device frames (like a smartphone or card). There is a distinct absence of lifestyle photography or complex illustrations. The imagery serves to demonstrate the product and its interface directly, emphasizing functionality and precision rather than emotive storytelling or abstract concepts. When icons are present, they are typically filled or outlined in the neutral palette. Density is moderate, with images serving as explanatory content alongside text blocks.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Both use a high-contrast achromatic base with a single vibrant accent color for interaction and a clean, technical aesthetic. |
| Ramp | Features a similar focus on financial tools presented with clear typography and a restrained color palette. |
| Mercury | Navigates a sophisticated B2B finance space with a simple, functional UI and minimal decorative elements. |
| Linear | Shares the use of strong typography, a limited color palette, and high information density presented cleanly. |
| Figma | Employs an extremely clean, function-over-form UI with distinct, legible typography and limited chromatic accents. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000
- Background: #ffffff
- CTA: #ff5900
- Border: #b9bbc6
- Accent: #15191e

### Example Component Prompts
1. Create a `Primary Action Button` with the label 'Get Started'. It should use `Action Orange` for the background and `Paper White` for the text. Ensure a `border-radius` of 8px and horizontal padding of 16px.
2. Design a `Hero Headline` using the `Flecha` font, 36px in size, 500 weight, and `Dark Charcoal` (#15191e) color. Line height should be 1.11 with normal letter spacing.
3. Implement a `Navigation Link Button` titled 'Products'. It should have a transparent background, `Dark Charcoal` (#15191e) text, 6px `border-radius`, and 4px vertical / 8px horizontal padding.
4. Generate a `Body Text Block` using the `Inter` font, 14px in size, 400 weight, and `Cool Stone` (#60646c) color. Line height 1.5. Content: 'Modern cards, banking, expenses, accounting, and more — in 120+ countries.'

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924115534-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924115534-thumb.jpg |
