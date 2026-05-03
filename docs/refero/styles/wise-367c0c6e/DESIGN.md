# Wise — Refero Style

- Refero URL: https://styles.refero.design/style/367c0c6e-73a7-441c-a8ff-91d139ac60dc
- Site URL: https://wise.com
- ID: 367c0c6e-73a7-441c-a8ff-91d139ac60dc
- Theme: light
- Industry: fintech
- Created: 2026-04-11T20:13:11.000Z
- Ranks: newest: 931, popular: 146, trending: 125

> Vibrant Fintech Authority; a financial system in bold green and crisp black on a pristine white canvas.

## Description

The Wise design system feels like an assured and straightforward financial platform, built on stark contrasts and an unwavering accent color. The primary palette of deep forest green, near-black, and bright white creates a dynamic and trustworthy visual identity. Heavy, condensed sans-serif headings anchor information with a no-nonsense tone, while clear, readable body text maintains legibility. Deliberately rounded corners on interactive elements provide a touch of modern approachability against otherwise sharp UI elements, emphasizing ease of use within a rigorous financial context.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page and section backgrounds, primary surfaces for content. |
| Ink Black | #0e0f0c | neutral | Primary heading text, interactive element text, high-contrast UI details. |
| Slate Text | #454745 | neutral | Body text, secondary headings, default icon color. |
| Ash Gray | #e8ebe6 | neutral | Subtle background for UI blocks, secondary card surfaces, borders. |
| Muted Grey | #868685 | neutral | Disabled states, subtle borders around inputs and buttons, placeholder text. |
| Ghost Gray | #6a6c6a | neutral | Tertiary text, less prominent UI elements. |
| Ambient Cyan | #ecf9f9 | neutral | Soft accent background, often for celebratory or informational sections. Suggests a cool, clean environment. |
| Forest Green | #163300 | brand | Primary brand color for text links, navigation items, selected states, and dark green elements within the UI. |
| Lime Accent | #9fe870 | accent | Call-to-action buttons, interactive accents, success indicators. Its vivid hue provides clear visual affordance. |
| Deep Teal | #0b4c72 | semantic | Informational badges, secondary links, and icons where a cooler blue tone is preferred over green for thematic variation. |
| Alert Red | #cb272f | semantic | Error messages, warnings, critical state indicators. A vivid, immediate call for attention. |
| Rich Red | #ef253b | brand | Vivid red filling for specific illustrations or icons. |
| Violet Tint | #221d9a | brand | Specific illustration details, rare accent. |
| Warm Orange | #ff7700 | brand | Specific illustration details, rare accent. |
| Deep Emerald | #054d28 | brand | Darker green accents within cards or icons. |
| Gold Yellow | #ffd300 | brand | Coin illustrations, specific accents. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 22px, 25px, 36px, 45px, 61px, 300px | 0.72, 1.00, 1.10, 1.25, 1.30, 1.40, 1.43, 1.44, 1.50, 1.55, 1.63, 1.71, 1.86, 2.17 | General body text, navigation, buttons, and smaller headings. Its high legibility and wide range of weights support all secondary content. |
| Wise Sans |  | 400, 900 | 40px, 52px, 59px, 89px, 105px, 300px | 0.85, 1.50 | Display and prominent headings. The custom font provides a distinctive brand voice with its strong, expanded letterforms, making headlines assertive without being aggressive. |
| monospace |  | 400 | 300px |  | monospace — detected in extracted data but not described by AI |
| sans-serif |  | 400 | 300px |  | sans-serif — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.44 | 0.005 |
| body-sm | 14 | 1.43 | 0.005 |
| body | 16 | 1.5 | -0.003 |
| subheading | 18 | 1.55 | -0.005 |
| heading-sm | 20 | 1.4 | -0.006 |
| heading-lg | 25 | 1.25 | -0.008 |
| display-sm | 36 | 1.1 | -0.009 |
| display | 45 | 1.1 | -0.011 |
| display-lg | 61 | 1 | -0.015 |
| display-xl | 89 | 0.85 | -0.002 |

## Spacing & Shape

```json
{
  "radius": {
    "sm": "2px",
    "full": "1000px",
    "none": "0px",
    "pill": "9999px",
    "card-lg": "28.1539px",
    "card-md": "18.7693px",
    "card-xl": "37.5385px",
    "default": "10px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "28px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Background: Lime Accent (#9fe870), Text: Forest Green (#163300), Border: 1px transparent, Radius: 9999px, Padding: 11px vertical, 24px horizontal. Delivers immediate visual action.

### Secondary Ghost Button

**Role:** Secondary action (text only)

Background: transparent, Text: Forest Green (#163300), Border: 1px transparent, Radius: 9999px, Padding: 11px vertical, 24px horizontal. Used for less prominent actions, integrating seamlessly with text content.

### Outlined Pill Button

**Role:** Tertiary action

Background: transparent, Text: Forest Green (#163300), Border: 1px solid Forest Green (#163300), Radius: 9999px, Padding: 8px vertical, 9.38462px horizontal. Provides a subtle interactive element with a clear boundary.

### Circular Icon Button

**Role:** Decorative/Functional

Background: Canvas White (#ffffff), Text: Slate Text (#454745), Border: 1px solid rgba(14, 15, 12, 0.12), Radius: 50%, Padding: 0px. Used for standalone icons or small interactive elements like pagination controls.

### Base Card

**Role:** Informational grouping

Background: transparent, Border: none, Shadow: none, Radius: 0px, Padding: 0px. Used for displaying collections of items, often with internal spacing creating structure.

### Rounded Informational Card

**Role:** Featured content

Background: Canvas White (#ffffff), Border: none, Shadow: none, Radius: 28.1539px, Padding: 37.5385px vertical, 28.1539px horizontal. Used for drawing attention to specific content blocks with a softer visual appeal.

### Dark Featured Card

**Role:** Prominent promotional content

Background: Forest Green (#163300), Border: none, Shadow: none, Radius: 37.5385px, Padding: 75.0769px vertical, 56.3076px horizontal. Acts as a high-contrast container for key messages or calls to value.

### Text Input

**Role:** User data entry

Background: transparent, Text: Ink Black (#0e0f0c), Border: 1px solid transparent, Radius: 10px, Padding: 12px vertical, 16px horizontal. Focus state likely indicated by a border.

### Accent Badge

**Role:** Highlight/Tag

Background: Lime Accent (#9fe870), Text: Forest Green (#163300), Radius: 16px, Padding: 0px vertical, 16px horizontal. Used for active states or small feature flags.

### Ghost Badge

**Role:** Informational tag

Background: transparent, Text: Forest Green (#163300), Radius: 16px, Padding: 0px vertical, 16px horizontal. For subtler categorization or descriptors.

## Do's

- Use Wise Sans at weight 900 for all large page headings to preserve the brand's bold, condensed voice.
- Apply Lime Accent (#9fe870) exclusively to primary call-to-action buttons and interactive elements to maintain its distinction.
- Set text links to Forest Green (#163300) to ensure interactive elements are clearly marked, matching the brand's primary color.
- Employ a 9999px border-radius for all primary buttons and interactive tags to provide a consistent modern and approachable feel.
- Use Canvas White (#ffffff) as the dominant background color for all primary content sections to ensure high contrast and readability.
- Implement an 8px element gap for standard spacing between UI elements like buttons and icons for a comfortable density.

## Don'ts

- Do not use Forest Green (#163300) as a background for non-interactive elements, as it's reserved for brand highlights and interactive text.
- Avoid using sharp corners on interactive buttons; all primary action buttons should use the 9999px pill radius.
- Do not deviate from the Inter font for body text and secondary content, as it is crucial for legibility and information hierarchy.
- Avoid applying excessive shadows; visual depth is primarily achieved through surface color variations and clear layout, with subtle shadow only for occasional emphasis.
- Do not use less than 11px padding for primary buttons; maintain the established 11px vertical and 24px horizontal padding for consistent actionability.
- Do not introduce additional vivid accent colors; the Lime Accent (#9fe870) and Deep Teal (#0b4c72) serve distinct purposes and should not be diluted.

## Layout

The page model is primarily max-width contained, with a few full-bleed sections. The hero section features a large, centered headline over a background that integrates a striking 3D graphic. Section rhythm alternates between full-width content blocks and contained content, maintaining consistent vertical spacing. Content is generally arranged in centered stacks for headings and subtext, transitioning to multi-column grids (like a 3-column country flag grid) for features and lists. The navigation is a sticky top bar, providing persistent access to core links and CTAs. The overall density is comfortable, ensuring sufficient breathing room around content.

## Imagery

The visual language focuses on a mix of abstract 3D elements and functional iconography. Large, stylized 3D coin and globe illustrations are used in hero sections, providing a unique, playful yet sophisticated brand identity related to finance. Product screenshots are used sparingly to show app interfaces. Iconography is clean, outlined, and monochromatic, primarily using Ink Black or Forest Green, serving an explanatory and navigational role. Images generally exist in isolation or within content blocks, avoiding full-bleed photography. The density is image-heavy in hero sections, transitioning to text-dominant with supporting icons in content areas.

## Elevation

| Element | Style |
| --- | --- |
| Input/Button focus | rgb(134, 134, 133) 0px 0px 0px 1px inset |
| Card Overlay | rgba(0, 0, 0, 0.15) 0px 10px 32px 0px, rgba(0, 0, 0, 0.04) 0px 40px 40px 0px |
| Small Card Shadow | rgba(0, 0, 0, 0.08) 0px 6px 20px 0px |
| Navigation | rgba(14, 15, 12, 0.12) 0px 0px 0px 1px |

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Shares a clean, light mode UI with strong typography and a singular vibrant accent color (purple for Revolut, green for Wise) for interactive elements and brand signaling. |
| Monzo | Features a direct, no-nonsense tone with high-contrast text, a predominantly light aesthetic, and a distinctive brand color (coral for Monzo) used for primary actions and highlights. |
| N26 | Employs a simple, clear layout with strong use of whitespace, bold headings, and a single accent color (blue for N26) to guide user interaction within a financial context. |
| Stripe | Displays a robust, product-focused UI with clear information hierarchy, strong sans-serif fonts, and a restrained use of vibrant colors against a largely monochrome background for trust and clarity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text: Ink Black (#0e0f0c)
- Background: Canvas White (#ffffff)
- CTA: Lime Accent (#9fe870)
- Primary Border: Muted Grey (#868685)
- Accent (Text Links): Forest Green (#163300)

Example Component Prompts:
1. Create a hero section: Canvas White (#ffffff) background. Headline 'MONEY FOR HERE, THERE AND EVERYWHERE' using Wise Sans weight 900, size 89px, line-height 0.85, letter-spacing -0.002em, color Ink Black (#0e0f0c). Subtext '160 countries...' using Inter weight 400, size 18px, line-height 1.55, letter-spacing -0.005em, color Slate Text (#454745). Primary button 'Open an account' (Primary Filled Button) and secondary link 'Send money now' (Secondary Ghost Button).
2. Create a feature card: Background Canvas White (#ffffff), Radius 28.1539px, Padding 37.5385px vertical, 28.1539px horizontal. Headline 'Trusted by millions' using Inter weight 700, size 25px, line-height 1.25, letter-spacing -0.008em, color Ink Black (#0e0f0c). Body text 'We move €14 billion...' using Inter weight 400, size 16px, line-height 1.5, letter-spacing -0.003em, color Slate Text (#454745).
3. Create a navigation bar: Background Canvas White (#ffffff), padding 12px vertical. 'Wise' logo (icon) color Forest Green (#163300). Navigation text 'Personal', 'Business', 'Platform' use Inter weight 500, size 16px, line-height 1.5, color Ink Black (#0e0f0c). Primary CTA button 'Sign up' (Primary Filled Button).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776119210797-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776119210797-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/367c0c6e-73a7-441c-a8ff-91d139ac60dc-1777567724709-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/367c0c6e-73a7-441c-a8ff-91d139ac60dc-1777567724709-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/367c0c6e-73a7-441c-a8ff-91d139ac60dc-1777567724709-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/367c0c6e-73a7-441c-a8ff-91d139ac60dc-1777567724709-preview-detail-poster.jpg |
